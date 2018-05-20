//none of these depend on the data being loaded so fine to define here
var width = 500;
var height = 450;
var margin = {top: 20, right: 20, bottom: 30, left: 40};
var w = width - margin.left - margin.right;
var h = height - margin.top - margin.bottom;
var frozen = false;
var originalDims = [[0,4],[4,8],[8,13],[13,15],[15,18],[18,30],[30,40]]

var dataset2 = {}; //the full dataset
var iafs2 = {};

var channels = ["AF3", "F7", "F3", "FC5", "T7", "P7", "O1", "O2", "P8", "T8", "FC6", "F4", "F8", "AF4"];
var auth = localStorage.getItem('auth')

document.getElementById('brain-svg-2').style.display = "none";

d3.request('https://api.synapse-solutions.net/v1/cohrfile/?subject=test&session=rest')
    .header("Authorization", auth)
    .get(function(res) {
        var data = JSON.parse(res.responseText);

        for(var i = 1; i < data.length; i++) {
            var channelData = [];
            var keys = data[0];
            for (var j = 5; j < 83; j++) {
                channelData.push({
                    "freq" : +(keys[j].substring(0, keys[j].length - 2)),
                    "spect" : +(data[i][j])
                });
            }
            var ch = data[i][1] + data[i][2];
            dataset2[ch] = channelData;
        }
        console.log(dataset2);
        document.getElementById('loading-2').style.display = "none";
        document.getElementById('brain-svg-2').style.display = "inline-block";
});

var col = d3.scaleOrdinal(d3.schemeCategory10);

var x = d3.scaleLinear()
    .domain([0, 40])
    .range([0, w]);

var y2 = d3.scaleLinear()
    .domain([0, 1])
    .range([h, 0]);

var line2 = d3.line()
    .x(function(d) {
        return x(d.freq);
    })
    .y(function(d){
        return y2(d.spect);
    });

var xAxis2 = d3.axisBottom()
    .ticks(4)
    .scale(x);

var yAxis2 = d3.axisLeft()
    .ticks(4)
    .scale(y2);

var bisect = d3.bisector(function(d) {return d.freq;}).left;

function drawViz2(chartName, dims, iaf) {
    // console.log(iaf);
    var chart = d3.select(chartName)
        .attr("width", w + margin.left + margin.right)
        .attr("height", h + margin.top + margin.bottom+15)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
    
    chart.append("g")
        .attr("class", "axis")
        .attr("transform", "translate(0," + h + ")")
        .call(xAxis2)
        .append("text")
        .attr("x", w)
        .attr("y", 30)
        .style("text-anchor", "end")
        .text("Frequency (Hz)");

    chart.append("g")
        .attr("class", "axis")
        .call(yAxis2)
        .append("text")
        .attr("transform", "rotate(-90)")
        .attr("y", 6)
        .attr("dy", ".71em")
        .style("text-anchor", "end")
        .text("Log Power");
    

    // CREATE BANDS
    var colors = ['#FB817C','#FFED7D','#A6FC7B','#82FECC','#7ACAFB','#A480FE','#FF7FEC']
    var label = ['Delta', 'Theta', 'Alpha', 'LB', 'UB', 'HB','Gamma']

    for (var i = 0; i < dims.length; i++) {
        chart.append('rect')
        .attr("x", function(d) { return x(dims[i][0]);  })
        .attr("y", function(d) { return y2(1);  })
        .attr("width", function(d) { return x(dims[i][1]-dims[i][0]); })
        .attr("height", function(d) { return y2(0); })
        .style("fill", colors[i])

        chart.append("text")
        .attr("class", "axis")
        .attr("x", function(d) {return x(dims[i][1]); })
        .attr("y", function(d) {return y2(0.9);})
        .style("text-anchor", "end")
        .html(label[i]);
    }

    var data;
    var ch1 = document.getElementById("stored2-1").value;
    var ch2 = document.getElementById("stored2-2").value;
    var mix = ch1 + ch2;
    var found = false;
    var cohrs = Object.keys(dataset2);
    for (var i = 0; i < cohrs.length; i++) {
        if (cohrs[i] == mix) {
            found = true;
        }
    }
    if (!found) {
        mix = ch2 + ch1;
    }

    data = dataset2[mix];
    document.getElementById("title3").innerHTML = "Spectogram of " + ch1 + " and " + ch2;

    chart.append("path")
        .datum(data)
        .attr("class", "line")
        .attr("d", line2);

    // tooltip
    var focus = chart.append("g")
        .attr("class", "focus")
        .style("display", "none");

    focus.append("line")
        .attr("class", "x-hover-line hover-line")
        .attr("y1", 0)
        .attr("y2", height);

    focus.append("line")
        .attr("class", "y-hover-line hover-line")
        .attr("x1", width)
        .attr("x2", width);

    focus.append("circle")
        .attr("r", 4.5);

    focus.append("text")
        .attr("x", 15)
      	.attr("dy", ".31em");

    chart.append("rect")
        .attr("class", "overlay")
        .attr("width", width - 70)
        .attr("height", height)
        .on("mouseover", function() { focus.style("display", null); })
        .on("mousemove", mousemove);
    
    function mousemove() {
        var x0 = x.invert(d3.mouse(this)[0]),
            i = bisect(data, x0, 1),
            d0 = data[i - 1],
            d1 = data[i],
            d = x0 - d0.freq > d1.freq - x0 ? d1 : d0;
        focus.attr("transform", "translate(" + x(d.freq) + "," + y2(d.spect) + ")");
        focus.select("text").text(function() { return "(" + d.freq + "Hz, " + d.spect + ")"; });
        focus.select(".x-hover-line").attr("y2", height - y2(d.spect) - 50);
        focus.select(".y-hover-line").attr("x2", width + width);
    }
}

var click2 = 0;

var a2 = document.getElementById("brain-svg-2");
a2.addEventListener("load",function(){
    // get the inner DOM of alpha.svg
    var svgDoc = a2.contentDocument;
    svgDoc.querySelector("svg").setAttribute("viewBox", "-50 -50 400 400");

    // get all circles and set to grey
    var gees = svgDoc.querySelectorAll("g");
    for (var i = 0; i < 78; i++) {
        var firstCircle = gees[i].querySelector("circle");
        if (firstCircle != null) {
            firstCircle.setAttribute("style", "fill:grey");

            for (var ch in channels) {
                var ts = gees[i].querySelector("tspan");
                if (ts != null && (ts.innerHTML == channels[ch])) {
                    console.log("found");

                    firstCircle.setAttribute("style", "fill:#F2B053");
					

                    // add behaviour
                    ts.addEventListener("mousedown",function(e){
                        if (click2 < 2) {
                            var c = e.target.parentElement.parentElement.querySelector("circle");
                            c.setAttribute("style", "fill:#B22222");
                        }

                        click2++;

                        var prompt = document.getElementById("prompt-2");
                        if (click2 == 1) {
                            prompt.innerHTML = "Please select the second channel";
                            document.getElementById("stored2-1").value = e.target.innerHTML;
                        }
                        if (click2 == 2) {
                            prompt.innerHTML = "Scroll down to see results or reset to reselect channels"
                            document.getElementById("stored2-2").value = e.target.innerHTML;
                            drawViz2("#chart3", originalDims, "");
                        }
                    }, false);
                }
            }
        }
    }

    console.log("cohr svg done");
}, false);

window.addEventListener("load", function() {
    document.getElementById("reset-2").addEventListener("click", function() {
        var gees = a2.contentDocument.querySelectorAll("g");
        for (var i = 0; i < 78; i++) {
            var firstCircle = gees[i].querySelector("circle");
            if (firstCircle != null) {
                firstCircle.setAttribute("style", "fill:grey");
                for (var ch in channels) {
                    var ts = gees[i].querySelector("tspan");
                    if (ts != null && (ts.innerHTML == channels[ch])) {
                        firstCircle.setAttribute("style", "fill:#F2B053");
                    }
                }
            }
        }
        document.getElementById("chart3").innerHTML = "";

        var prompt = document.getElementById("prompt-2");
        prompt.innerHTML = "Please select the first channel";
        click2 = 0;
    }, false);

    console.log("cohr done");
});

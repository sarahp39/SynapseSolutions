<?php
	
	include("common.php");
	
	head();
	
	topBanner();
?>
<body>
<div id="layout">
	<div id="title">
        <h2>Distribution of Electrodes for Electroencephalogram</h2>
	</div>
	<div id="visualization">
        <h2 id="prompt">Please select the first channel</h2>
        <button id="reset" type="submit">Reset</button>
        <div id="brain-cont">
            <img id="loading" src="../img/round.gif" alt="loading">
            <object id="brain-svg" type="image/svg+xml" data="../brain.svg" width="500px" height="500px">
                Your browser does not support SVG
            </object>
        </div>

        <input id="stored1" type="hidden"/>
        <input id="stored2" type="hidden"/>
        
        <div id="cont1">
            <h2 id="title1"></h2>
            <svg id="chart1" class="chart"></svg>
        </div>
        <div id="cont2">
            <h2 id="title2"></h2>
            <svg id="chart2" class="chart"></svg>
        </div>

    <style>
        .line {
            fill: none;
            stroke: navy;
            stroke-width: 2px;
            shape-rendering: crispEdges;
        }

        .axis line,
        .axis text {
            fill: black;
            font: 11px sans-serif;
        }
        .axis path {
            fill: none;
            stroke: #000;
            shape-rendering: crispEdges;
        }

        .chart {
            background-color: white;
            border: 1px solid red;
        }

        #title {
            background-color:white;
            text-align: center;
        }

        #visualization {
            text-align: center;
        }

        #brain-svg {
            background-color: white;
            border: 1px solid red;
        }

        #brain-cont {
            fill: yellow;
            padding: 5px;
        }

        .clickable-svg {
            background-color: greenyellow;
        }

        .nonclickable-svg {
            fill: grey;
        }

        #reset, #cont1, #cont2 {
            display:inline-block;
            text-align:center;
        }

        .overlay {
        fill: none;
        pointer-events: all;
        }

        .focus circle {
        fill: #F1F3F3;
        stroke: #6F257F;
        stroke-width: 5px;
        }
        
        .hover-line {
        stroke: #6F257F;
        stroke-width: 2px;
        stroke-dasharray: 3,3;
        }
    </style>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="../testParam.js"></script>

</body>
</html>


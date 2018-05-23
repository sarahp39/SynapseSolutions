<?php
	
	include("common.php");
	
	head();
	
	topBanner();
	
	logoBodyStart();

	dropdowns();
	
	
		?>
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div class = "mainArea">
			<p class = "mainTitle" >
				MY DATA
			</p>
			
			<div id = "contentArea"  class = "generalBorder" >
			
				<!-- FILE CONTENT -->
					
					<div class="tab"> <!-- MOVE ONCLICKS TO JS -->
						<button class="tablinks" id = "summaryBtn" onclick="openCity(event, 'summary')">summary</button>
						<button class="tablinks" id = "spectraBtn" onclick="openCity(event, 'spectra')">spectra</button>
						<button class="tablinks" id = "coherenceBtn" onclick="openCity(event, 'coherence')">coherence</button>
					</div>

					<div id="summary" class="tabcontent">
						<h3>summary</h3>
						
						<div id = "key">
					
						</div>
						
						<div id = "value">
						
						</div>
					
					</div>

					<div id="spectra" class="tabcontent">
						<h3>Distribution of Electrodes for Electroencephalogram</h3>
						
						<div id="layout">
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
							</div>
						</div>
					</div>

					<div id="coherence" class="tabcontent">
						<h3>Distribution of Electrodes for Electroencephalogram</h3>
                        
                        <div id="layout-2">
                            <div id="visualization-2">
                                <h2 id="prompt-2">Please select the first channel</h2>
                                <button id="reset-2" type="submit">Reset</button>
                                <div id="brain-cont-2">
                                    <img id="loading-2" src="../img/round.gif" alt="loading">
                                    <object id="brain-svg-2" type="image/svg+xml" data="../brain.svg" width="500px" height="500px">
                                        Your browser does not support SVG
                                    </object>
                                </div>

                                <input id="stored2-1" type="hidden"/>
                                <input id="stored2-2" type="hidden"/>
                                
                                <div id="cont3">
                                    <h2 id="title3"></h2>
                                    <svg id="chart3" class="chart"></svg>
                                </div>
                            </div>
                        </div>
					</div>
					
					
			</div>
				
			
			
			
			
			
			
					
			
		</div>
		
		<script type="text/javascript" src="../fileContent.js"></script>
		<script src="https://d3js.org/d3.v4.min.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		<script src="../testParam.js"></script>
		<script src="../coherence.js"></script>
		
	</div> <!-- body id-->

<?php
	bottomBanner();
?>

	
</html>
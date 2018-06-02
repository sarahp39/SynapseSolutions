# SynapseSolutions
2018 Capstone Project - This README contains the front end portion of our project. 

## Project Overview
Currently, researchers throughout multiple universities working with brain signal data (more specifically, electroencephalogram or EEG data) face many issues in trying to clean, filter, and analyze their data. They are having to utilize multiple different tools and are stuck with using simple spreadsheets which require them to manually edit the data line by line as well as program scripts difficult to work with as they are written in R. There is a lack of visualizations and a non-existent user interface.

As a solution to these problem, we have collaborated with [Dr. Andrea Stocco’s](https://github.com/TheRealDrDre) Cognition and Corticol Dynamics Laboratory at the University of Washington (UWCCDL) and created Synapse Solutions.

Synapse Solutions provides a live server, accessible from any computer and even on mobile, on which researchers are now able to clean, filter, and analyze their EEG data in just a few steps. Our tool allows researchers to upload their data files and visualize the EEG graphs. They can click on the graph produced to set parameters such as an alpha peak. In addition, they can visually compare data from the same channel of the brain cap (used in the collection of the EEG data) between two different data files.

## Contents

- [Front End](#front-end)
- [Back End](#back-end)
- [Screen Shots](#screen-shots)
- [Authors](#authors)

## Front End
As Synapse Solutions is a web tool, we took advantage of PHP as a way to reduce code redundancy through the website as every page follows a specific basic design. We also employed some Bootstrap libraries along with our own CSS code for the design and styles. HTML and JavaScript are the primary languages used for the front-end functionality development of our tool. D3.js framework was used for data visualiziation. The web interface is hosted on an Amazon EC2 SUSE Linux Enterprise Server which supports SSH File Transfer Protocol (SFTP) using the FileZilla file transfer software. We chose this option for our front end because we are dealing with personal, sensitive brain data and wish to conform to industry practices. AWS supports [USA HIPAA compliance](https://aws.amazon.com/compliance/hipaa-compliance/) in order to protect the user healthcare data and we received approval from the EEG Lab to build the web app on this platform. FileZilla software allows the easy drag-and-drop of files into the client server.

## Back End

[Link to Back End Repository](https://github.com/fredhw/synapse-api)

The back end of the web app was built on Docker Images and hosted on Amazon Web Services (Linux AMI 2). We chose to host the web API server on AWS per request from our stakeholders in order to conform to industry practices for applications dealing with personal, sensitive data as well as noting the relative accessibility of AWS for prospective contributors to this project. The underlying API framework was built with Golang Web Language in INFO344 Server Side Web Development class by Frederick Wijaya. The main feature of this API is the **qeeg-api microservice** which breaks down [Dr. Stocco's EEG Analysis Script](https://github.com/uwccdl/qeeg) into R API endpoints which allows the running of specific EEG data analysis functions on a web server without prior setup on a computer. This was made possible with the [Plumber](https://www.rplumber.io/docs/index.html) package.

* [Full documentation of the back end](https://github.com/fredhw/synapse-api/blob/master/README.md) can be found here.

## Screen Shots
### Business Pages
#### The Landing Page
![Landing-Page](https://github.com/sarahp39/SynapseSolutions/blob/master/landingpage.png)
#### The About Page
![About-Page](https://github.com/sarahp39/SynapseSolutions/blob/master/aboutpage.png)

### Data Visualization Pages
#### Analysis Page
![Analysis](https://github.com/sarahp39/SynapseSolutions/blob/master/analysispage.png)

In addition to letting the users see what raw data files have been uploaded to the web server, the Analysis Page contains four main features with regards to data manipulation:
* **View** - redirects the user to the View page which contains the Summary, Spectra and Coherence tabs for live data visualization.
* **Compare** - redirects the user to a page where they can compare two datasets channel-by-channel.
* **Clean** - downloads a cleaning template in Excel with the data from the summary endpoint pasted into it already.
* **Download** - downloads the analyzed data in .tsv format from the web server. Possible options are Summary/Spectra/Coherence.

#### View Feature - Summary Tab
![Summary](https://github.com/sarahp39/SynapseSolutions/blob/master/summary.PNG)

> This tab displays the general EEG summary data for a raw data file.

#### View Feature - Spectra Tab
![Spectra1](https://github.com/sarahp39/SynapseSolutions/blob/master/spectra1.png)
![Spectra2](https://github.com/sarahp39/SynapseSolutions/blob/master/spectra2.png)

> This tab creates Spectogram visualizations based on the spectra text file obtained from the web server. Users are prompted to choose two channels from a 10-20 brain-electrode diagram of highlighted channels that are in the dataset for comparison. Users are also able to interact to the data by hovering over the graph to view points and adjust peaks for standard deviation. This feature also supports color-blind mode, which was implemented based on peer feedback.

#### View Feature - Coherence Tab
![Coherence](https://github.com/sarahp39/SynapseSolutions/blob/master/coherence.PNG)

> Similar to the Spectogram visualizations in the Spectra Tab, the Coherence Tab visualizes normalized data of two channels' coherence. Hover focus and colorblind mode are supported.

#### Compare Feature
![Compare](https://github.com/sarahp39/SynapseSolutions/blob/master/compare.png)

> This page visualizes the spectra of two raw-data files simultaneously. The current datasets shown are test_rest.txt (5 minute data) and 28210_Lang1Pre1.txt (30 minute data) for comparison.

## Authors
- [Frederick Wijaya](https://github.com/fredhw) - fredhw@uw.edu
- [Mathi Manalavan](https://github.com/nila12) - mathimano@hotmail.com
- [Sarah Phillips](https://github.com/sarahp39) - sarahp39@uw.edu

A special thank you to Dr. Andrea Stocco, Dr. Chantel Prat, Brianna Yamasaki, Malayka Mottarella and Justin Abernethy of the UWCCDL for guidance during the course of the project, as well as Prof. David Stearns of the Information School for sharing his expertise on AWS and back-end frameworks.

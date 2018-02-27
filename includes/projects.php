<?php

$projects_time = array(
  //project 4
  "De-burring Processing on Document Images" =>
  array("2015-12", "2016-11"),
  //project 5
  "Smart Car based on myRIO" =>
  array("2016-08", "2016-09"),
  //project 1
  "Hierarchical Image Tagging System" =>
  array("2017-10", "2018-05"),
  //project 2
  "Machine Learning Based Alzheimer's Disease Prediction" =>
  array("2017-10", "2017-12"),
  //project 3
  "Kinect-based Robot Sorting System" =>
  array("2016-07", "2017-06"),

);

$projects_detail = array(
  //project 1
  "Hierarchical Image Tagging System" =>
  array(
    "Trained a deep CNN image classification model (Inception-V3) with ImageNet data.",
    "Built a hierarchical tree for all the labels based on ImageNet. ",
    "Designed an algorithm to improve accuracy based on the hierarchical tree.",
    "Work on score function and the experiment of measuring the accuracy of result."
  ),

  //project 2
  "Machine Learning Based Alzheimer's Disease Prediction" =>
  array(
    "Used linear interpolation in Python to deal with missing data.",
    "Predicted ADAS13 and MMSE data with functional PCA model, and Ventricle data using non-linear mixed-effect model.",
    "Successfully solved the classification problem in diagnosis based on decision tree, achieved an accuracy of 85%."
  ),

  //project 3
  "Kinect-based Robot Sorting System" =>
  array(
    "Designed a robot pick-and-place system, applying Kinect as the RGB-D sensor and Windows PC as the processor, to control Dobot Robot Arm to recognize, locate, pick up and sort objects.",
    "Developed a Windows application with GUI to control Dobot Robot Arm and implemented a sorting mission using MFC and OpenCV.",
    "Accomplished an overall 90% success rate of object sorting."
  ),

  //project 4
  "De-burring Processing on Document Images" =>
  array(
    "Realized the L0-regularized prior based on intensity and gradient for text deblurring in MATLAB.",
    "Proposed a new framework to reduce processing time with recovering quality assured. Accelerated the computing speed from 35% to 55%.",
    "Applied the method in images, which demonstrated advantages in processing time and image quality recovering."
  ),

  //project 5
  "Smart Car based on myRIO" =>
  array(
    "Designed a smart car with myRIO controller to run in a racing track, using different strategies in Labview to make the car go through efficiently.",
    "Applied IPad as a console to control the car and received the data collected from sensors on car.",
    "Successfully completed the process and ranked the 1st in the whole project, highly recognized by National Instrument."
  ),

);

function timecomp($a,$b)
{
    // Subtracting the UNIX timestamps from each other.
    // Returns a negative number if $b is a date before $a,
    // otherwise positive.

    return strtotime($b[1])-strtotime($a[1]);
}
function sort_projects_by_time(){
  global $projects_time;
  uasort($projects_time, 'timecomp');
}



?>

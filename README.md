# Tableau Summary: Airline Analysis

## Overview
This Tableau visualization provides a comprehensive analysis of airline departure delays, examining delay causes, airline performance metrics, and flight operations across different carriers.

## Key Findings

### Delay Causes Analysis
The visualization reveals significant variations in delay causation:
- **Most Common Delay**: Late aircraft arrivals represent the primary source of departure delays
- **Least Common Delay**: Security-related issues cause the fewest departure delays

### Airline Performance Comparison
Average delay times show substantial differences across carriers:
- **Worst Performance**: Hawaiian Airlines Inc. with an average delay of 22.7 minutes
- **Best Performance**: Virgin America with the lowest average delay of 13.1 minutes
- **Performance Range**: Nearly 10-minute difference between best and worst performing airlines

### Flight Operations Metrics
The analysis highlights interesting contrasts in airline operations:
- **Highest Volume Carrier**: Southwest Airlines Co. leads in both total distance flown and flight count
- **Average Distance Leader**: Virgin America achieves the highest average mileage per flight despite lower overall volume

## Business Implications
This visualization provides valuable insights for:
- Airlines seeking to improve operational efficiency
- Passengers making carrier selection decisions
- Industry analysts comparing airline performance
- Airport operations teams understanding delay patterns

The data suggests that flight volume doesn't necessarily correlate with delay performance, as demonstrated by Virgin America's superior metrics in both delay times and flight efficiency despite lower overall flight counts.

### Summary of Each Tab:

## AVG Departure Delay by Airport with an Airline filter:
- Wanted to show all of the airports on a map for the viewer to see.
- Added in sizing by delay to help guide the eyes towards the airports with larger average delay times.
- Left the color alone as a gradient didn’t really show much.

## AVG Delay by type of delay:
- Chose a pie chart to show the relational size of each delay type (their average)
- Used colors to help distinguish between the pieces of the pie
- Chose the colorblind palette on Tableau

## AVG Delay by Airline:
- The average delay by airline helps to show a picture of how much time you might expect to spend delayed
- Since it is barchart, I left the color to default
- Ordered it in descending order to show greatest to least

## Distance by Airline:
- The total sum of miles per each airline
  - Show just how much they’ve flown
- Since it is a barchart, I left the color to default
- Ordered it in descending order to show greatest to least


## Count of Flights by Airline:
- The total count of flights by each airline
  - Show how many flights they have done
- Since it is a barchart, I left the color to default
- Ordered it in descending order to show greatest to least

## AVG Distance by Count of Flights:
- Used an aggregate of the sum of distance divided by the count of flights by airline
  - Showed that the top average distance by flight count wasn’t the same as the top flight count or top distance
- Since it is a barchart, I left the color to default
- Ordered it in descending order to show greatest to least

## Airline Distance Dashboard:
- Brought the three workbooks above together
- Wanted the average distance by count of flights to be bigger on the bottom to emphasize that is a vastly different order than the other two charts


*Analysis by Mike Monroe*

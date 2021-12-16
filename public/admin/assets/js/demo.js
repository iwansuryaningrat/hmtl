"use strict";
// Cicle Chart
Circles.create({
  id: "task-complete",
  radius: 50,
  value: 80,
  maxValue: 100,
  width: 5,
  text: function (value) {
    return value + "%";
  },
  colors: ["#36a3f7", "#fff"],
  duration: 400,
  wrpClass: "circles-wrp",
  textClass: "circles-text",
  styleWrapper: true,
  styleText: true,
});

// JQVmap
$("#map-example").vectorMap({
  map: "world_en",
  backgroundColor: "transparent",
  borderColor: "#fff",
  borderWidth: 2,
  color: "#e4e4e4",
  enableZoom: true,
  hoverColor: "#35cd3a",
  hoverOpacity: null,
  normalizeFunction: "linear",
  scaleColors: ["#b6d6ff", "#005ace"],
  selectedColor: "#35cd3a",
  selectedRegions: ["ID", "RU", "US", "AU", "CN", "BR"],
  showTooltip: true,
  onRegionClick: function (element, code, region) {
    return false;
  },
});

// generate HTML legend
myLegendContainer.innerHTML = statisticsChart.generateLegend();

// bind onClick event to all LI-tags of the legend
var legendItems = myLegendContainer.getElementsByTagName("li");
for (var i = 0; i < legendItems.length; i += 1) {
  legendItems[i].addEventListener("click", legendClickCallback, false);
}

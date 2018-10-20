
/**
 * Define SVG path for target icon
 */
var targetSVG = "M0,5.5 C0,2.462434 2.238576,0 5,0 C7.761424,0 10,2.462434 10,5.5 C10,5.668539 9.993108,5.835307 9.979617,6 C10,9.005737 5,16 5,16 C5,16 0,9.022339 0,6 C0.006892,5.835307 0,5.668539 0,5.5 Z";

/**
 * Create the map
 */
var theMap = AmCharts.makeChart( "conferenceMapdiv", {
  "height": 500,
  "type": "map",
  "theme": "light",
  "dataTableId": "conferenceMapData",
  "balloon": {
    "shadowAlpha": 0,
    "adjustBorderColor": true,
    "animationDuration": 0,
    "borderThickness": 0,
    "color": "#ffffff",
    "fillColor": "#00000",
    "fontSize": 15,
  },
  "imagesSettings": {
    "rollOverColor": "#2D372D",
    "rollOverScale": 1.5,
    "selectedScale": 2,
    "selectedColor": "#2D372D",
    "color": "#006DD1",
    "accessibleLabel": "[[title]]",
    "descriptionWindowLeft": 0,
    "descriptionWindowTop": 100,
    "descriptionWindowWidth": 450,
    "easingFunction": "AmCharts.easeOutElastic"
  },

  "areasSettings": {
    "unlistedAreasColor": "#737373",
    "alpha": 1
  },

  "dataProvider": {
    "map": "worldLow",
    "images": [{
      "type": "circle",
      "accessibleLabel": "Cornell University",
      "institution": "Cornell University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "In 2006, researchers from Cornell University led a 1.5 day meeting devoted to discussion of issues and strategies related to developing Non-Suicidal Self-Injury into a new field of study.<br><a href='"+THEME_DIR+"/conferences/PDFs/2006.pdf' target='_blank'>View the Program</a>",
      "title": "Cornell University <br><small>July 13th-14th, 2006</small>",
      "latitude": 42.443961,
      "longitude": -76.501881,
      "id":2006,
      "programLink": THEME_DIR+"/conferences/PDFs/2006.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "McGill University",
      "institution": "McGill University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 2007 meeting, organized by Dr. Nancy Heath, focused on fostering communication and collaborations among clincians and researchers in NSSI.<br><a href='"+THEME_DIR+"/conferences/PDFs/2007.pdf' target='_blank'>View the Program</a>",
      "title": "McGill University <br><small>April 17th, 2007</small>",
      "latitude": 45.501689,
      "longitude": -73.567256,
      "id": 2007,
      "programLink": THEME_DIR+"/conferences/PDFs/2007.pdf"

    },{
      "type": "circle",
      "accessibleLabel": "Harvard University",
      "institution": "Harvard University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The third annual meeting of ISSS included breakout sessions and group-discussions on future directions of the field.<br><a href='"+THEME_DIR+"/conferences/PDFs/2008.pdf' target='_blank'>View the Program</a>",
      "title": "Harvard University <br><small>June 28th-29th, 2008</small>",
      "latitude": 42.380327,
      "longitude": -71.138910,
      "id": 2008,
      "programLink": THEME_DIR+"/conferences/PDFs/2008.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Stony Brook University",
      "institution": "Stony Brook University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The fourth annual meeting of ISSS including a spotlight on student presentations, and a featured symposium on NSSI in DSM 5, moderated discussions, and keynote address by Dr. Thomas Joiner of Florida State University, <em>“Why people die by suicide</em><br><<br><a href='"+THEME_DIR+"/conferences/PDFs/2009.pdf' target='_blank'>View the Program</a>",
      "title": "Stony Brook University<br><small>June 27-28th</small>",
      "latitude": 40.915450,
      "longitude": -73.122714,
      "id": 2009,
      "programLink": THEME_DIR+"/conferences/PDFs/2009.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Northwestern University & Alexian Brothers Behavioral Health Hospital",
      "institution": "Northwestern University & Alexian Brothers Behavioral Health Hospital",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "June 26th-27th, 2010<br> <a href='"+THEME_DIR+"/conferences/PDFs/2010.pdf' target='_blank'>View the Program</a>",
      "title": "Northwestern University <br> & Alexian Brothers Behavioral Health Hospital<br><small>June 26th-27th</small>",
      "latitude": 41.896068,
      "longitude": -87.616877,
      "id": 2010,
      "programLink": THEME_DIR+"/conferences/PDFs/2010.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Fordham University",
      "institution": "Fordham University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The sixth annual meeting of ISSS included the first clinical pre-conference, and included additional presentations and discussion of international considerations in the field, and public policy action goals.<br><a href='"+THEME_DIR+"/conferences/PDFs/2011.pdf' target='_blank'>View the Program</a>",
      "title": "Fordham University <br><small>June 25th-26th, 2011</small>",
      "latitude": 40.770232,
      "longitude": -73.984652,
      "id": 2011,
      "programLink": THEME_DIR+"/conferences/PDFs/2011.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "University of North Carolina, Chapel Hill",
      "institution": "University of North Carolina, Chapel Hill",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "TThe seventh annual meeting of ISSS featured a keynote address by Dr. John Curry on the prevalence of NSSI in adolescent clinical trials.<br><a href='"+THEME_DIR+"/conferences/PDFs/2012.pdf' target='_blank'>View the Program</a>",
      "title": "University of North Carolina, Chapel Hill <br><small>June 30th-July 1st, 2012</small>",
      "latitude": 35.913200,
      "longitude": -79.055845,
      "id": 2012,
      "programLink": THEME_DIR+"/conferences/PDFs/2012.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Simon Fraser University",
      "institution": "Simon Fraser University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 2013 meeting of the International Society for the Study of Self-Injury featured an invited address by Dr. Christian Schmahl, and included panels on the integration of research and practice in NSSI and co-occuring disorders. <a href='"+THEME_DIR+"/conferences/PDFs/2013.pdf' target='_blank'>View the Program</a>",
      "title": "Simon Fraser University <br><small>June 28th -30th, 2013</small>",
      "latitude": 49.284512,
      "longitude": -123.111602,
      "id": 2013,
      "programLink": THEME_DIR+"/conferences/PDFs/2013.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Northwestern University & Alexian Brothers Behavioral Health Hospital",
      "institution": "Northwestern University & Alexian Brothers Behavioral Health Hospital",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 9th annual meeting of ISSS included informal networking events, “Great Debates” on the intra- and inter-personal functions of non-suicidal self-injury, and panel discussions on future directions of research in NSSI.<br><a href='"+THEME_DIR+"/conferences/PDFs/2014.pdf' target='_blank'>View the Program</a>",
      "title": "Northwestern University & <br>Alexian Brothers Behavioral Health Hospital<br><small>June 26th-27th, 2014</small>",
      "latitude": 41.896068,
      "longitude": -87.616877,
      "id": 2014,
      "programLink": THEME_DIR+"/conferences/PDFs/2014.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "Ulm Univesrity <br><em>Heidelberg, Germany</em>",
      "institution": "Ulm Univesrity <br><em>Heidelberg, Germany</em>",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 10th annual meeting of ISSS included a diverse set of perspectives on the state of the field, including future clinical directions, and clinical perspectives on NSSI in Suicidology. <br><a href='"+THEME_DIR+"/conferences/PDFs/2015.pdf' target='_blank'>View the Program</a>",
      "title": "Ulm Univesrity <br><em>Heidelberg, Germany</em>",
      "latitude": 49.398752,
      "longitude": 8.672434,
      "id": 2015,
      "programLink": THEME_DIR+"/conferences/PDFs/2015.pdf"
    }, {
      "type": "circle",
      "accessibleLabel": "University of Wisconsin <br> Eau-Claire",
      "institution": "University of Wisconsin <br> Eau-Claire",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 11th annual meeting of ISSS included special presntations on the dissemination of research fidnings and clinical insights among community professionals, schools, and police departments.<br> <a href='"+THEME_DIR+"/conferences/PDFs/2016.pdf' target='_blank'>View the Program</a>",
      "title": "University of Wisconsin, <br> Eau-Claire <br> <small>June 17th-18th, 2016</small>",
      "latitude": 44.798513,
      "longitude": -91.501753,
      "id": 2016,
      "programLink": THEME_DIR+"/conferences/PDFs/2016.pdf"

    },{
      "type": "circle",
      "accessibleLabel": "Temple University",
      "institution": "Temple University",
      "tabIndex": 2,
      "zoomLevel": 3,
      "description": "The 12th annual meeting of ISSS featured special presentations on NSSI in under-researched areas. <br><a href='"+THEME_DIR+"/conferences/PDFs/2017.pdf' target='_blank'>View the Program</a>",
      "title": "Temple University<br><small>June 23rd-24th, 2017</small>",
      "latitude": 39.980944,
      "longitude": -75.157837,
      "id": 2017,
      "programLink": THEME_DIR+"/conferences/PDFs/2017.pdf"
    }]
  },
  "export" :{
    "enabled": true
  }
});

/*map.addListener( 'init', function() {
  //map.legend.switchable = true;
  map.legend.addListener( "clickMarker", AmCharts.myHandleLegendClick );
  map.legend.addListener( "clickLabel", AmCharts.myHandleLegendClick );
} );

AmCharts.myHandleLegendClick = function( event ) {
  var id = event.dataItem.id;
  if ( undefined !== event.dataItem.hidden && event.dataItem.hidden ) {
    event.dataItem.hidden = false;
    map.showGroup( id );
  } else {
    event.dataItem.hidden = true;
    map.hideGroup( id );
  }
  map.legend.validateNow();
}*/
theMap.addListener('init', loadMapTable)
theMap.addListener('init', getClickedTableItem);


function loadMapTable(event){
var mapItems = event.chart.dataProvider.images;
for (m in mapItems){
//  console.log(mapItems[m]);
  jQuery('#conferenceMapTable .dataStart')
    .append('<tr class="'+mapItems[m].id+'">'+
      '<td>'+mapItems[m].id+'</td>'+
      '<td>'+mapItems[m].accessibleLabel+'</td>'+
      '<td><a class="btn btn-secondary" target="_blank" href="'+mapItems[m].programLink+'"> Download The Program <span class="screen-reader-text">the program for the '+mapItems[m].id+' conference></span></td></tr>');
}
}

function getClickedTableItem(event){
jQuery('#conferenceMapTable').click( function(){
var theMap = event.chart;
var selectedRow = jQuery(this).find("tr:hover");
//console.log(selectedRow.find('td:nth-child(1)').text());
var selectedYear = selectedRow.find('td:nth-child(1)').text();
theMap.selectObject(theMap.getObjectById(selectedYear));
});
}




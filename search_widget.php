<div id="searchForm">
 
    <form id="hotSearch" name="hotSearch" action="http://reservations.travelovation.com/index.jsp" method="post" onSubmit="return validate(this);">
 
    <input type="hidden" name="pageName" value="hotSearch">
    <input type="hidden" name="validateDates" value="true">
    <input type="hidden" name="validateCity" value="true">
    <input type="hidden" name="mode" value="2">
    <input type="hidden" name="submitted" value="true">
    <input type="hidden" name="netOnly" value="true">
    <input type="hidden" name="fc" value="list">
    <input type="hidden" name="locale" value="">
 
    <input type="hidden" name="specials" value="false">
    <input type="hidden" name="city" value="">
    <input type="hidden" name="stateProvince" value="">
    <input type="hidden" name="country" value="">
    <input type="hidden" name="showPopUp" value="true">
    <input type="hidden" name="passThrough" value="true">
<input type="hidden" name="cid" value="9999">
 
 
    <div >
 
    <div >
    <p >1. Select a Destination</p>
 
    <div>
 
 
 
    <fieldset class="city">
    <label for="city">City<br /><input name="cityText" class="city" value="City name"></label>
 
 
                               
 
 
 
 
</div>
</div><!-- end insideBorder -->
 
<div >
<p >2. Select your Dates</p>
 
<div>
 
<fieldset>
<label>Check in<br />
 
<select onchange="amadChange(document.hotSearch.arrivalMonth, document.hotSearch.arrivalDay, document.hotSearch.departureMonth, document.hotSearch.departureDay)" name="arrivalMonth">
 
 
<option value=0>January</option>
<option value=1>February</option>
<option value=2>March</option>
<option value=3>April</option>
<option value=4>May</option>
<option value=5>June</option>
<option value=6>July</option>
<option value=7>August</option>
<option value=8>September</option>
<option value=9>October</option>
<option value=10>November</option>
<option value=11>December</option>
 
 
</select>
 
<select onChange="amadChange(document.hotSearch.arrivalMonth, document.hotSearch.arrivalDay, document.hotSearch.departureMonth, document.hotSearch.departureDay)" name="arrivalDay">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
 
<a href="javascript:openCalendar('hotSearch', 'arrival');"><img src="http://travel.ian.com/BU40/_media/icons/calendar.gif" align="bottom"></a>
</label>
</fieldset>
 
<fieldset>
<label>Check out<br />
 
<select onchange="dmddChange(document.hotSearch.departureMonth,document.hotSearch.departureDay)" name="departureMonth">
 
 
<option value=0>January</option>
<option value=1>February</option>
<option value=2>March</option>
<option value=3>April</option>
<option value=4>May</option>
<option value=5>June</option>
<option value=6>July</option>
<option value=7>August</option>
<option value=8>September</option>
<option value=9>October</option>
<option value=10>November</option>
<option value=11>December</option>
 
 
</select>
 
<select onchange="dmddChange(document.hotSearch.departureMonth,document.hotSearch.departureDay)" name="departureDay">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
 
</select>
<a href="javascript:openCalendar('hotSearch', 'departure');"><img src="http://travel.ian.com/BU40/_media/icons/calendar.gif" align="bottom"></a>
</label><br>
                   
                   
                   
</fieldset>
<p>
<fieldset>
<table align="left" border="0" cellspacing="0" cellpadding="0" >
<tr>
<td><div id="hot-search-params"></div></td>
</tr>
<tr>
<td valign="bottom"><input type="submit" value="Search" class="button"></td>
</tr>
</table>
</fieldset>
</div>
</div><!-- end insideBorder -->
 
       
</div><!-- end outsideBorder -->
</form>
</div>
<!-- END SEARCH  -->
<script langage="javascript">
<!--
//start new script code
// Checks if browser is Netscape 2.0x since the options array properties don't work with Netscape 2.0x
function isBrowserSupp() {
// Get the version of the browser
version =  parseFloat( navigator.appVersion );
 
if ( ( version >= 2.0 ) && ( version < 2.1 ) && ( navigator.appName.indexOf( "Netscape" ) != -1 ) ) {
   return false;
} else {
   return true;
}
return true;
}
function isLeapYear( yrStr ) {
var leapYear = false;
var year = parseInt( yrStr, 10 );
// every fourth year is a leap year
if ( year % 4 == 0 ) {
   leapYear = true;
   // unless it's a multiple of 100
   if( year % 100 == 0 ) {
       leapYear = false;
       // unless it's a multiple of 400
       if( year % 400 == 0 ) {
           leapYear=true;
       }
   }
}
return leapYear;
}
function getDaysInMonth( mthIdx, YrStr ) {
// all the rest have 31
var maxDays = 31
// expect Feb. (of course)
if( mthIdx == 1 ) {
   if( isLeapYear( YrStr ) ) {
       maxDays=29;
   } else {
       maxDays=28;
   }
}
// thirty days hath...
if( mthIdx == 3 || mthIdx == 5 || mthIdx == 8 || mthIdx == 10 ) {
   maxDays=30;
}
return maxDays;
}
//the function which does some magic to the date fields
// return non-zero if it is the last day of the month
function adjustDate( mthIdx, Dt ) {
var value = 0;
 
var today = new Date()
var theYear = parseInt( today.getFullYear(), 10 )
 
if( mthIdx < today.getMonth() ) {
   theYear = ( parseInt( today.getFullYear(), 10 ) + 1 )
}
if( theYear < 100 ) {
   theYear = "19" + theYear
} else {
   if( ( theYear - 100 ) < 10 ) {
       theYear = "0" + ( theYear - 100 )
   } else {
       theYear = ( theYear - 100 ) + ""
   }
   theYear = "20" + theYear
}
var numDays = getDaysInMonth( mthIdx, theYear );
 
if( mthIdx == 1 ) {
   if( Dt.options.selectedIndex + 1 < numDays ) {
       return 0;
   } else {
       Dt.options.selectedIndex=numDays - 1;
       //check for leap year
       if( numDays == 29 ) {
           return 99;
       } else {
           return 1;
       }
   }
}
 
if( Dt.options.selectedIndex + 1 < numDays ) {
   value = 0;
} else {
   if ( Dt.options.selectedIndex + 1 > numDays ) {
       Dt.options.selectedIndex--;
       value = 3;
   } else {
       //index is 31 or 30
       value = 2;
   }
}
return value;
}
 
//changes departure month when arrival month is changed
function amadChange( inM, inD, outM, outD ) {
if ( !isBrowserSupp() ) {
   return;
}
 
var res = adjustDate( inM.options.selectedIndex, inD );
if( res != 0 ) {
   outD.options.selectedIndex = 0;
   if ( outM.options.selectedIndex == 11 ) {
       outM.options.selectedIndex = 0
   } else {
       outM.options.selectedIndex=inM.options.selectedIndex + 1;
       outD.options.selectedIndex = 1;
   }
} else {
   outM.options.selectedIndex = inM.options.selectedIndex;
   if (outD.options.selectedIndex <= inD.options.selectedIndex) {
       outD.options.selectedIndex = inD.options.selectedIndex + 2;
   }
}
return;
}
 
 
 
 
function dmddChange( outM, outD ) {
if ( !isBrowserSupp() ) {
   return;
}
 
adjustDate( outM.options.selectedIndex, outD );
return;
}
 
 
 
 
function loadDates(arrivalMonthSelect,  arrivalDaySelect, departureMonthSelect, departureDaySelect)
{
var calendar = new Date();
var calendar2 = new Date();
var cal
var cal2
var date;
var month;
var year;
var date2;
var month2;
var year2;
 
//Here is the variable to change for to advance the arrival Date
var advanceArrival = 14;
//Here is the variable to change for to advance the departure Date
var advanceDeparture = 16;
 
 
//Set the arrival Days
calendar.setDate(calendar.getDate()+ advanceArrival);
date = calendar.getDate();
month = calendar.getMonth();
 
//Set the Departure Days
calendar2.setDate(calendar2.getDate()+advanceDeparture);
date2 = calendar2.getDate();
month2 = calendar2.getMonth();
 
arrivalMonthSelect.value=month;
arrivalDaySelect.value=date;
departureMonthSelect.value=month2;
departureDaySelect.value=date2;
}
//-->
</script>
 
<script langauage="javascript">
<!--
function update(themonth,theday){
document.forms[fName].elements[formType+'Day'].options[theday - 1].selected = true;
document.forms[fName].elements[formType+'Month'].options[themonth].selected = true;
 
testWindow.close();
}
function loadCalendar(viewMonth) {
testWindow.document.close();
testWindow.document.open();
 
var day_of_week = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
var month_of_year = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
 
var dateObj = new Date();
var year = dateObj.getFullYear();        // Returns year
var month = dateObj.getMonth();  // Returns month (0-11)
var today = dateObj.getDate();   // Returns day (1-31)
var weekday = dateObj.getDay();  // Returns day (1-31)
 
var DAYS_OF_WEEK = 7;   // "constant" for number of days in a week
var DAYS_OF_MONTH = 31; // "constant" for number of days in a month
var cal;                // Used for printing
 
if (viewMonth < month) {
   year = year + 1;
}
 
if(year < 1900){
   year += 1900; //done to solve the problem of netscape and mozilla returning year in form 10X for years > 2000
}
 
month = viewMonth;
dateObj.setDate(1);      // Start the calendar day at '1'
dateObj.setMonth(month); // Start the calendar month at now
dateObj.setFullYear((year));
 
// VARIABLES FOR FORMATTING
var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=0 BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';
var prevM = month - 1;
var nextM = month + 1;
 
if (nextM == 12) {
   nextM = 0;
}
 
if (prevM == -1) {
   prevM = 11;
}
 
// BEGIN CODE FOR CALENDAR
cal =  '<html><head><title>Calendar</title></head><body>';
cal += '<style>a{cursor: hand}body,table,td{cursor: default;font-family:sans-serif;font-size:12px;color:black;}p.masterHEADER {background: gray; color:white; font-weight: bold; font-size: 13px;margin:0;padding:5px;text-align: center;}</style>';
 
cal += '<div style="border:black 1px solid;">';
cal += '<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="2" width="100%">' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '"><p class=masterHEADER>';
cal += month_of_year[month] + '   ' + year + '</p>' + TD_end + TR_end;
cal += TR_start;
 
///////////////////////////////////
// DO NOT EDIT BELOW THIS POINT  //
///////////////////////////////////
 
// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++) {
   // PRINTS DAY
   cal += TD_start + day_of_week[index] + TD_end;
}
 
cal += TD_end + TR_end;
cal += TR_start;
 
// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < dateObj.getDay(); index++) {
   cal += TD_start + '  ' + TD_end;
}
 
// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++) {
   if( dateObj.getDate() > index ) {
       // RETURNS THE NEXT DAY TO PRINT
       week_day =dateObj.getDay();
 
       // START NEW ROW FOR FIRST DAY OF WEEK
       if(week_day == 0) {
           cal += TR_start;
       }
 
       if(week_day != DAYS_OF_WEEK) {
           // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
           var day  = dateObj.getDate();
 
           // PRINTS DAY
           cal += TD_start + "<span onclick='window.opener.update(" + month + "," + day + "," + year +")'>" + day + "</span>" + TD_end;
       }
 
       // END ROW FOR LAST DAY OF WEEK
       if(week_day == DAYS_OF_WEEK) {
           cal += TR_end;
       }
   }
 
   // INCREMENTS UNTIL END OF THE MONTH
   dateObj.setDate(dateObj.getDate()+1);
 
}// end for loop
 
cal += '</td></TR></TABLE></div><br>';
cal += '<div align="center"><a href="javascript:" onClick="window.opener.loadCalendar(' + prevM + ');">&lt;&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;';
cal += '<a href="javascript:" onClick="window.opener.loadCalendar(' + nextM + ');">&gt;&gt;</a></div>';
cal += '<a href="javascript:window.close();" style="float:right">close</a>';
cal += '</body></html>';
 
//  PRINT CALENDAR
testWindow.document.write(cal);
}
 
var testWindow;
var fieldName;
var fName;
 
function openCalendar(formName,type) {
formType=type;
fName=formName;
testWindow = window.open('','dates','width=300,height=225,resizable=1,status=1,menubar=0,location=0');
loadCalendar(document.forms[fName].elements[formType+'Month'].selectedIndex);
}
//-->
</script>
<script language="javascript">
<!--
function setCityInformation(_city, _state, _country) {
clearTextBox(document.forms["hotSearch"].cityText);
document.forms["hotSearch"].city.value = _city;
document.forms["hotSearch"].stateProvince.value = _state;
document.forms["hotSearch"].country.value = _country;
}
 
function clearTextBox(_textbox) {
_textbox.value = "";
}
 
function validate(form) {
if (form.numberOfRooms.selectedIndex == 8) {
   window.location = "http://travel.ian.com/index.jsp?pageName=groups&cid="&document.forms["hotsearch"].cid.value&"locale=en_US";
   return false;
}
 
if (document.forms["hotSearch"].cityText.value != "") {
   document.forms["hotSearch"].stateProvince.value = "";
   document.forms["hotSearch"].country.value = "";
   document.forms["hotSearch"].city.value = document.forms["hotSearch"].cityText.value;
}
 
return submitGuestInfoForm(form);
}
//-->
</script>
<!-- my custom search box -->
<script language="javascript">
<!--
// NOTE: customize variables in this javascript block as appropriate.
var defaultAdults="2";
var cellStyle="";
var childHelp="<p id=SUBHEADLINE>Please provide the ages of children in each room. Children's ages should be their age at the time of travel.</p>";
var adultHelp="";
var textRooms="<span id=SUBHEADLINE>Rooms</span>";
var textAdults="<span id=SUBHEADLINE>Adults <br> (age 19+)<span id=SUBHEADLINE>";
var textChildren="<span id=SUBHEADLINE>Children</span>";
var textChildError="<span id=SUBHEADLINE>Please specify the ages of all children.</span>";
var pad='<img src="http://travel.ian.com/images/p.gif" width="5" height="1">';
// NOTE: Question marks ("?") get replaced with a numeric value
var textRoomX="<span id=SUBHEADLINE>Room ?:</span>";
var textChildX="<span id=SUBHEADLINE>Child ?:</span>";
 
//-->
</script>
<!-- NOTE: DO NOT MODIFY THIS JAVASCRIPT BLOCK -->
<script language="javascript">
<!--
var adultsPerRoom=new Array(defaultAdults);
var childrenPerRoom=new Array();
var childAgesPerRoom=new Array();
var numRooms=1;
var maxChildren=0;
 
refresh();
 
function setChildAge(room, child, age) {
if (childAgesPerRoom[room] == null) {
   childAgesPerRoom[room] = new Array();
}
childAgesPerRoom[room][child] = age;
}
 
function setNumAdults(room, numAdults) {
adultsPerRoom[room] = numAdults;
}
 
function setNumChildren(room, numChildren) {
childrenPerRoom[room] = numChildren;
refresh();
}
 
function setNumRooms(x) {
numRooms = x;
for (i = 0; i < x; i++) {
   if (adultsPerRoom[i] == null) {
       adultsPerRoom[i] = 2;
   }
   if (childrenPerRoom[i] == null) {
       childrenPerRoom[i] = 0;
   }
}
refresh();
}
 
function renderRoomSelect() {
var x = '';
x += '<select name="numberOfRooms" onchange="setNumRooms(this.options[this.selectedIndex].value);">';
for (var i = 1; i < 9; i++) {
   x += '<option value="'+i+'"'+(numRooms == i ? ' selected' : '')+'>' + i;
}
x += '<option value="9"'+(numRooms == 9 ? ' selected' : '')+'>9+';
x += '</select>';
return x;
}
 
function refresh() {
maxChildren = 0;
for (var i = 0; i < numRooms; i++) {
   if (childrenPerRoom[i] > maxChildren) {
       maxChildren = childrenPerRoom[i];
   }
}
 
var x = '';
if (adultHelp.length > 0) {
   x = adultHelp + "<p>\n";
}
 
if (numRooms > 8) {
   x += textRooms;
   x += renderRoomSelect();
 
} else {
   x += '<table border="0" cellspacing="2" cellpadding="0" class="SUBHEADELINE">\n';
   x += '<tr><td>'+textRooms+pad+'</td>';
   if (numRooms >= 1) {
       x += '<td>&nbsp;</td>';
   }
   x += '<td><nobr>'+textAdults+pad+'</nobr></td><td'+cellStyle+'><nobr>'+textChildren+pad+'</nobr></td></tr>\n';
   for (var i = 0; i < numRooms; i++) {
       x += '<tr><td'+cellStyle+'>';
       if (i == 0) {
           x += renderRoomSelect();
       } else {
           x += '&nbsp;';
       }
       x += '</td>';
       if (numRooms >= 1) {
           x += '<td><nobr>'+getValue(textRoomX, i+1)+pad + '</nobr></td>';
       }
       x += '<td>';
       x += buildSelect('room-' + i + '-adult-total', 'setNumAdults(' + i + ', this.options[this.selectedIndex].value)', 1, 4, adultsPerRoom[i]);
       x += '</td><td>';
       x += buildSelect('room-' + i + '-child-total', 'setNumChildren(' + i + ', this.options[this.selectedIndex].value)', 0, 5, childrenPerRoom[i]);
       x += '</td></tr>\n';
   }
   x += '</table>\n';
 
   var didHeader = false;
   for (var i = 0; i < numRooms; i++) {
       if (childrenPerRoom[i] > 0) {
           if (!didHeader) {
               x += '<table border="0" cellpadding="0" cellspacing="2">\n';
               x += '<tr><td colspan="'+(maxChildren+1)+'">';
               x += '<img src="/images/p.gif" width="1" height="5"><br>';
               x += childHelp;
               x += '<img src="/images/p.gif" width="1" height="5"><br>';
               x += '</td></tr>\n<tr><td>&nbsp;</td>';
               for (var j = 0; j < maxChildren; j++) {
                   x += '<td'+cellStyle+'><nobr>'+getValue(textChildX, j+1)+pad+'</nobr></td>\n';
               }
               didHeader = true;
           }
           x += '</tr>\n<tr><td><nobr>'+getValue(textRoomX, i+1)+pad+'</nobr></td>';
           for (var j = 0; j < childrenPerRoom[i]; j++) {
               x += '<td'+cellStyle+'>';
               var def = -1;
               if (childAgesPerRoom[i] != null) {
                   if (childAgesPerRoom[i][j] != null) {
                       def = childAgesPerRoom[i][j];
                   }
               }
               x += '<select name="room-'+i+'-child-'+j+'-age" onchange="setChildAge('+i+', '+j+', this.options[this.selectedIndex].value);">';
               x += '<option value="-1"'+(def == -1 ? ' selected' : '')+'>-?-';
               x += '<option value="0"'+(def == 0 ? ' selected' : '')+'>&lt;1';
               for (var k = 1; k <= 18; k++) {
                   x += '<option value="'+k+'"'+(def == k ? ' selected' : '')+'>'+k;
               }
               x += '</td>';
           }
           if (childrenPerRoom[i] < maxChildren) {
               for (var j = childrenPerRoom[i]; j < maxChildren; j++) {
                   x += '<td'+cellStyle+'>&nbsp;</td>';
               }
           }
           x += '</tr>\n';
       }
   }
   if (didHeader) {
       x += '</table>\n';
   }
}
 
document.getElementById("hot-search-params").innerHTML = x;
}
 
function buildSelect(name, onchange, min, max, selected) {
var x = '<select name="' + name + '"';
if (onchange != null) {
   x += ' onchange="' + onchange + '"';
}
x +='>\n';
for (var i = min; i <= max; i++) {
   x += '<option value="' + i + '"';
   if (i == selected) {
       x += ' selected';
   }
 
   x += '>' + i + '\n';
}
x += '</select>';
return x;
}
 
function validateGuests(form) {
if (numRooms < 9) {
   var missingAge = false;
   for (var i = 0; i < numRooms; i++) {
       var numChildren = childrenPerRoom[i];
       if (numChildren != null && numChildren > 0) {
           for (var j = 0; j < numChildren; j++) {
               if (childAgesPerRoom[i] == null || childAgesPerRoom[i][j] == null || childAgesPerRoom[i][j] == -1) {
                   missingAge = true;
               }
           }
       }
   }
 
   if (missingAge) {
       alert(textChildError);
       return false;
   } else {
       return true;
   }
} else {
   return true;
}
}
 
function submitGuestInfoForm(form) {
if (!validateGuests(form)) {
   return false;
}
 
return true;
}
 
function getValue(str, val) {
return str.replace(/\?/g, val);
}
//-->
</script>
 
<script defer="defer" type="text/javascript">
loadDates(document.forms['hotSearch'].arrivalMonth,document.forms['hotSearch'].arrivalDay, document.forms['hotSearch'].departureMonth, document.forms['hotSearch'].departureDay)
</script>
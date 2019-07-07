http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx

http://phillihp.com/toolz/php-array-beautifier/

http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?op=GetHolidaysAvailable

Search> Scotland

XML>
http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx/GetHolidaysAvailable


Postman>

POST http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx
Body: text/xml

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetHolidaysAvailable xmlns="http://www.holidaywebservice.com/HolidayService_v2/">
      <countryCode>Canada or GreatBritain or IrelandNorthern or IrelandRepublicOf or Scotland or UnitedStates</countryCode>
    </GetHolidaysAvailable>
  </soap:Body>
</soap:Envelope>


http://phillihp.com/toolz/php-array-beautifier/
Array ( [GetHolidaysAvailableResult] => Array ( [HolidayCode] => Array ( [0] => Array ( [Code] => NEW-YEARS-DAY-ACTUAL [Description] => New Year's Day ) [1] => Array ( [Code] => NEW-YEARS-DAY-OBSERVED [Description] => New Year's Day ) [2] => Array ( [Code] => 2ND-JANUARY-ACTUAL [Description] => 2nd January ) [3] => Array ( [Code] => 2ND-JANUARY-OBSERVED [Description] => 2nd January ) [4] => Array ( [Code] => BURNS-NIGHT [Description] => Robert Burns Night (Burns Night) ) [5] => Array ( [Code] => HOLOCAUST-MEMORIAL [Description] => Holocaust Memorial Day ) [6] => Array ( [Code] => VALENTINES-DAY [Description] => Valentine's Day ) [7] => Array ( [Code] => ST-DAVIDS-DAY [Description] => St. David's Day ) [8] => Array ( [Code] => BST-START [Description] => British Summertime (BST) Begins ) [9] => Array ( [Code] => ST-PATRICKS-DAY [Description] => St. Patrick's Day ) [10] => Array ( [Code] => EASTER-ACTUAL [Description] => Easter Sunday ) [11] => Array ( [Code] => EASTER-OBSERVED [Description] => Easter Monday ) [12] => Array ( [Code] => GOOD-FRIDAY [Description] => Good Friday ) [13] => Array ( [Code] => SHROVE-TUESDAY [Description] => Shrove Tuesday (Pancake Day) ) [14] => Array ( [Code] => ASH-WEDNESDAY [Description] => Ash Wednesday ) [15] => Array ( [Code] => PALM-SUNDAY [Description] => Palm Sunday ) [16] => Array ( [Code] => MAUNDY-THURSDAY [Description] => Maundy Thursday ) [17] => Array ( [Code] => APRIL-FOOLS [Description] => April Fools Day ) [18] => Array ( [Code] => QUEEN-ELIZABETH-BIRTHDAY [Description] => Queen Elizabeth's Birthday ) [19] => Array ( [Code] => ST-GEORGES-DAY [Description] => St. George's Day ) [20] => Array ( [Code] => MOTHERS-DAY [Description] => Mothering Sunday (Mother's Day) ) [21] => Array ( [Code] => MAY-DAY [Description] => May Day (Early May Bank Holiday) ) [22] => Array ( [Code] => SPRING-BANK [Description] => Spring Bank Holiday ) [23] => Array ( [Code] => TROOPING-THE-COLOUR [Description] => Trooping the Colour ) [24] => Array ( [Code] => FATHERS-DAY [Description] => Father's Day ) [25] => Array ( [Code] => EMMELINE-PANKHURST-DAY [Description] => Emmeline Pankhurst Day ) [26] => Array ( [Code] => ST-SWITHUNS-DAY [Description] => St. Swithun's Day (aka St. Swithin's) ) [27] => Array ( [Code] => SUMMER-BANK [Description] => Summer Bank Holiday ) [28] => Array ( [Code] => HALLOWEEN [Description] => Halloween ) [29] => Array ( [Code] => BST-END [Description] => British Summertime (BST) Ends ) [30] => Array ( [Code] => ALL-SAINTS-DAY [Description] => All Saints Day ) [31] => Array ( [Code] => GUY-FAWKES-NIGHT [Description] => Guy Fawkes Night ) [32] => Array ( [Code] => REMEMBERANCE-DAY [Description] => Remembrance Day (Remembrance Sunday) ) [33] => Array ( [Code] => ST-ANDREWS-DAY-ACTUAL [Description] => St. Andrew's Day ) [34] => Array ( [Code] => ST-ANDREWS-DAY-OBSERVED [Description] => St. Andrew's Day ) [35] => Array ( [Code] => CHRISTMAS-ACTUAL [Description] => Christmas ) [36] => Array ( [Code] => CHRISTMAS-OBSERVED [Description] => Christmas ) [37] => Array ( [Code] => BOXING-DAY-ACTUAL [Description] => Boxing Day ) [38] => Array ( [Code] => BOXING-DAY-OBSERVED [Description] => Boxing Day ) [39] => Array ( [Code] => HOGMANAY [Description] => Hogmanay ) [40] => Array ( [Code] => NEW-YEARS-EVE [Description] => New Year's Eve ) [41] => Array ( [Code] => GOLDEN-JUBILEE-QUEEN-ELIZABETH-II-2012 [Description] => Golden Jubilee of Queen Elizabeth II ) [42] => Array ( [Code] => ROYAL-WEDDING-2011 [Description] => Royal Wedding ) [43] => Array ( [Code] => DIAMOND-JUBILEE-QUEEN-ELIZABETH-II-2012 [Description] => Diamond Jubilee of Queen Elizabeth II ) ) ) ) 
<?php session_start();
$check = isset($_SESSION['user_id']);
if ($check) {
  include 'db_model/database.php';
  $db = new database();
  $db->db_connect();
  $user_id        = $_SESSION['user_id'];
  $client_data    = $db->select("client","id",$user_id)[0];
  $client_name    = $client_data["name"];
  $client_address = $client_data["address"];
  $client_email   = $client_data["clientMail"];
  $client_property   = $client_data["propertyType"];
  $client_rooms = $client_data["roomNum"];
  $client_city = $client_data["city"];
  $client_addressNum = $client_data["addressNumber"];
  $client_test = $client_data["testType"];
  $client_building = $client_data["buildingType"];
  $client_heightB = $client_data["buildingHeight"];
  $client_floor = $client_data["floor"];
  $client_entrance = $client_data["entrance"];
  $client_levels = $client_data["levels"];
  $client_warehouse = $client_data["wareHouse"];
  $client_parking = $client_data["parking"];
  $client_newB = $client_data["buildingNew"];
  $client_ageB = $client_data["buildingAge"];
  $client_specifications = $client_data["specifications"];
  $client_cladding = $client_data["claddingType"];
  $client_plans = $client_data["plansB"];
  $client_fronts = $client_data["fronts"];
  $client_according = $client_data["accordingPlan"];
  $client_changes = $client_data["changes"];
  $client_recive = $client_data["reciveDate"];
  $client_entry = $client_data["entryDate"];
  $client_price = $client_data["price"];
  $client_phone = $client_data["clientTel"];
  $report_data    = $db->select("report","client_id",$user_id);
  $db->close();
  header("Content-type: application/vnd.msword; charset=windows-1255" );
  header(sprintf("Content-Disposition: attachment; Filename= %s.doc", $client_address));
}
?>
<!DOCTYPE html>
<html"> 
  <head>
  <meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=windows-1255" />
  </head>
  <body dir="rtl">
    <?php
      if ($check) { ?>
        <h1 style='text-align: center;'> Report </h1>
        <hr>
       <p> לכבוד <?php echo $client_name;?><?php echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; תאריך עריכה:&nbsp;" .date("m.d.y") ?></p> 
       <p></p>
<p><?php echo "כתובת אימייל:".$client_email ?></p>  
<p>א.נ.</p> 
 
<p style="text-align: center; font-size: 18px;"><b><u>חוות דעת מומחה</u></b></p>
 
<p style="text-align: center; font-size: 18px;"><u><b>הנדון: <?php echo $client_address?></b></u></p>        
      
<p>• אני ,פיני אדר , נותן חוות דעתי זו במקום עדות בבית משפט ומצהיר בזאת כי ידוע לי היטב, שלעניין הוראות החוק הפלילי בדבר עדות שקר בבית משפט, דין חוות דעת זו כשהיא חתומה על ידי כדין עדות בשבועה בבית משפט.</p>  
<p>• עפ"י בקשת <?php echo $client_name; ?>  , נערך על ידי ביקור <?php echo "בתארי:" .date("m.d.y"); ?> בנכס שבנדון, על מנת לתת את חוות דעת
אלה פרטי השכלתי :</p> 
 
<p><strong>2015  - 2014   מוסמך לבקר בניה  ותכן  – rics  (Royal  institution  of Chartered Surveyors )</strong></p>
<p><strong>2004  -2001   בית הספר הארצי להנדסאים מטעם מ.ה.ט  מכללת תל אביב , מגמה הנדסת בניה.</strong></p> 
<p><strong>2013  -2013   קורס להסמכת מפקחים לעבודות בנין פיתוח ותשתיות – חברה למשק וכלכלה של השלטון 
                       המקומי .</strong></p> 
 <p><strong>2014- 2014   קורסי  בטיחות בבניה הנדסית  (מנהלי עבודה מוסמך ) – מנהל הבטיחות והבריאות              
                       התעסוקתית   משרד הכלכלה .</strong></p> 
<p>• מספר רישיון  רישוי ה - 37085</p> 
<p style="font-size: 18px; text-align: center;"><strong><u>אלה פרטי ניסיוני:</u></strong></p>
<p><strong>2014-2015   ניהול פרויקט מגורים.  
                     תפקידי כלל: ניהול ביצוע של  פרויקט מגורים . </strong></p>
<p><strong>2003-2014   מבצר מהנדסים בע"מ .  
                     תפקידי כלל: ניהול ביצוע של  פרויקט ציבוריים מול רשויות כגון :
                     עירית ירושלים - פיקוח על בתי ספר גדולים ,
                     קריית יערים –פיקוח וניהול  על הקמת בתי ספר וגנים 
                   משרד החינוך ירושלים – פיקוח וניהול שיפוץ נרחב משרדי משרד החינוך י-ם 
                     בעל ניסיון רב בעבודות ביסוס, שלדגם, פיתוח, פיקוח, בדיקת והכנת חשבונות, מכרזים, 
                      מפרטים, כתבי כמויות, לווילות  בנייה,.</strong></p>

<p><strong>2003-2006    אדר עתיד חב' לבניין .  
                      תפקידי כלל: ביצוע של  פרויקטים פרטיים קוטג'ים , וילות, שיפוצים  וכו' .</strong></p>
<p><strong>2001-2002    פ.אדר ניהול פרויקטים בע"מ  
                      תפקידי כלל: ביצוע של  פרויקטים פרטיים קוטג'ים , וילות, שיפוצים  וכו' .</strong></p>
<p><strong>2000 -1994   רמדא  בנין ופיתוח בע"מ .  
                      תפקידי כלל: ביצוע של  פרויקטים ציבוריים (שיפוץ בית חולים איתנים למשרד הבריאות  , עבודה 
                      מול יזמים חברת לוינשטיין , קבלנים : אוראלי ליבנה ,יפאורה  .א. אפשטיין אדריכלים</strong></p>
<p><strong>1993 -1989    עמידר חברה לאומית  - חשב מחוז .  
                      תפקידי כלל: אחראי על ניהול נכסים דירות מגורים של חברת עמידר במחוז תל אביב כלל  
                      החזקה   ושיפוץ , השכרה, מכירה , ניהול תקציבי  של המחוז</strong></p> 

<h1>עקרונות מנחים לחוות דעתי ומסמכים שבהם עיינתי לצורך הכנתה</h1>
<hr>
<p>1.  חוק מכר (דירות) תשל"ג- 1973. ציטוט:</p>
<p>"אי-התאמה יסודית" - אי-התאמה בחלקי הבניין הנושאים ומעבירים עומסים מכל סוג לקרקע הנושאת את הבניין והנוגעת להבטחת יציבותו ולבטיחותו;</p>
<p>"תקופת בדק" - תקופה הקבועה בתוספת, שתחילתה בעת העמדת הדירה לרשות הקונה;</p>
<p>"תקופת אחריות" - תקופה של שלוש שנים שתחילתה בתום תקופת הבדק.</p>
 <p>4א. הודעה על אי-התאמה (תיקון: תש"ן)</p>
<p>(א) הקונה יהיה זכאי להסתמך על אי-התאמה -</p>
<p>(1) שניתן היה לגלותה בעת העמדת הדירה לרשותו, אם הודיע עליה למוכר תוך שנה מאותו מועד;</p>
<p>(2) שלא ניתן היה לגלותה בבדיקה סבירה בעת העמדת הדירה לרשותו אם הודיע עליה למוכר תוך זמן סביר לאחר שגילה אותה.</p>
<br>
<p style="font-size: 18px;">תוספת (תיקון: תש"ן):</p>
<br>
<p>(1)  צנרת כולל מערכת הסקה ומרזבים - שנתיים;</p>
<p>(2)  חדירת רטיבות בגג, בקירות ובמקלט - שלוש שנים;</p>
<p>(3)  מכונות, מנועים ודודים - שלוש שנים;</p>
<p>(4)  קילוף חיפויים בחדרי מדרגות - שלוש שנים;</p>
<p>(5)  שקיעת מרצפות בקומת קרקע - שלוש שנים;</p>
<p>(6)  שקיעת מרצפות בחניות, במדרכות, בשבילים בשטח הבנין - שלוש שנים;</p>
<p>(7)  סדקים עוברים בקירות ובתקרות - חמש שנים;</p>
<p>(8)  קילופים ניכרים בחיפויים חיצוניים - שבע שנים;</p>
<p>(9)  כל אי-התאמה אחרת, שאינה אי-התאמה יסודית - שנה אחת.</p>

<p>ועל פי סעיף 4 שבחוק:</p>
<p>(א) המוכר לא קיים את חיוביו כלפי הקונה אם התקיים אחד מאלה:</p>
<p>(1) הדירה או כל דבר שבה (להלן - הדירה) שונים מן האמור במפרט, בתקן 
רשמי או בתקנת בנייה. </p>
<p>(ב)  אי קיום חיוב כאמור בסעיף קטן (א') יראו כאי התאמה במשמעותה בחוק 
המכר, התשכ"ח – 1968.</p>

<p>2.  תקנות התכנון והבנייה (בקשה להיתר, תנאיו ואגרות) תש"ל- 1970.</p>
<p>3.  חוק החשמל תשי"ד (1954 ) ונספחי תקנות משנים אחרות.</p> 
<p>4.  תקנים רשמיים/לא רשמיים ומפרטים של מכון התקנים הישראלי לפי צו מכר הדירות (טופס של מפרט), התשל"ד -  1974, נדרש:
כל המוצרים והמלאכות יהיו לפי דרישות התקן הישראלי כאשר יש כזה.
וכן על פי תקנות התכנון והבנייה (בקשה להיתר, תנאיו ואגרותיו), התש"ל – 1970, סעיף מס' 1  מוגדר תקן כ:</p>
"תקן" - תקן ישראלי, ובאין תקן כאמור - תקן של כל מוסד חבר בארגון הבינלאומי לתקינה (I.S.O  ). 
<p>5.    פסקי דין הרלוונטיים: לדוגמה, ע"פ פסק דין בביהמ"ש המחוזי בחיפה בפני כבוד השופט ד"ר ד. ביין, בת.א. 782/93 (פרץ שלמה ואח' נ. יפרח בניין ופיתוח בע"מ), נדרש: </p>
<p style="border-color: black; border-style: solid; border-width: 2px; text-align: center;"><strong>מאחר ולא דובר במפרט על תקן רשמי, יש לפרש את האמור כחל על כל תקן שהוצע על ידי מכון התקנים בישראל, בין אם הוא תקן זמני )סעיף 7א' לחוק התקנים( ובין אם הוא רשמי )סעיף 8 לחוק הנ"ל.</strong></p>
   
<p>6.  הוראות למתקני תברואה (הל"ת) התשמ"א- 1970 ,ועדכונים משנים מאוחרות יותר.</p>                       
<p>7.  מפרט כללי לעבודות בנייה בהוצאת משרד הביטחון, מע"צ ומשרד הבינוי והשיכון. (הספר הכחול)</p>
<p>8.  הנחיות לתכנון חניה שפורסמו על ידי מנהל היבשה, האגף לתכנון תחבורתי במשרד התחבורה.   
פרק ד' : תכנון חניונים.</p>
<p>9.  חוק ההתגוננות האזרחית, תשי"א 1951 ,הכולל את תקנות ההתגוננות האזרחית (מפרטים לבניית מקלטים) התש"ן- 1990 ועדכונים משנים מאוחרות יותר. </p>
<p>10. בהעדר  דרישות או הוראות חוקים, תקנים, מפרטים הרלוונטיים ללקוי מסוים, הסתמכתי על    
ניסיוני  המקצועי הרחב בענף. </p>
<p>11. מפרט טכני שצורף לחוזה המכר.</p>
<p>12. תוכניות הבית כפי שצרפו לחוזה המכר.</p>  
<p>13. מסמכי התקשרות בין הצדדים: כגון תוכניות, מפרטים, מכתבים וכדומה 
רקע כללי.</p>
<h1 style="text-align: center;">רקע כללי</h1>
<hr style="border-width: 2px; border-color: black; border-style: solid;">
<p>הנכס הנבדק <?php echo "הינו " .$client_property; ?> <?php echo "בת" .$client_rooms. "חדרים" ?> , <?php echo "ו" .$client_levels; ?>קומות. </p>
 <?php
 if ($client_floor!==null) {
    echo "<p> בקומה" .$client_floor. "בבניין בעל" .$client_heightB ."קומות </p>";
 }
  ?>
        שנקבעה בתקן ישראלי מס' 166 (כינוי הקומות בבניינים.)</p>  <!-- need to change here the parameters in to the ones fro the table -->
<p>2.     יחידת הדיור הנבדקת הינה: .</p>  <!-- location of the apartament in the building || if it's a villa ot duplex should be different-->
<p>3.     לנכס   חניות צמודות  בקומה </p> <!-- parking spaces - number and locations -->  
<p>5.    לנכס יש מחסן צמוד   בקומה  </p> <!-- wheare house location, if there is one -->    
<p>6.    בבדיקה וויזואלית, ללא תוכניות, הנכס בנוי בשיטת בנייה   ברנוביץ  או שווי ערך משולב.</p> <!-- house plans! --> 
<p>7.     הקירות החיצוניים של הבניין מצופים בשילוב של אבן.</p>
<p>8.     הנכס מחובר  למערכות חשמל, מים סדירות, .</p> 
<p>9.     הנכס  נמסר לרשות הדיירים.</p>
<p>10.  חוות הדעת נערכה במקביל למסירה של הנכס .</p>
<p>11.  חוות דעתי זו עוסקת באיכות ביצוע העבודות ,וזאת עפ"י השוואה למקורות המוזכרים בפרק הקודם, 
       בהיבטים הטכניים, ההנדסיים והאדריכליים ואינה מתייחסת לניתוח של חוזק וחישובים סטטיים של
       המבנה, לבדיקת סיבולת ועמידות המבנה ברעידות אדמה, למדידת קרינה, אקוסטיקה, להתאמות בין מצבו 
       הפיסי של הנכס הנבדק לבין הרישומים ברשויות שונות, כגון: עירייה, רשם המקרקעין, מנהל מקרקעי 
       ישראל וכ"ד, אלא אם כן צוינה אי התאמה כזו באופן במפורש.</p>
<p>12.  הבדיקה נערכה בעיקרה באמצעים ויזואליים תוך שימוש במכשירי מדידה מקובלים בענף במידת הצורך
   (לא הרסנים ). כגון: פלס אלקטרוני, גלאי מתכת, מד לחות מסוג "protimeter", מצלמת אינפרה אדום,  
        מטר, מד מרחק אלקטרוני וכדו'.</p>
<p>13.  חוות דעת זו בנויה על סמך ממצאים שניתן לקבוע בשטח במהלך ביקורי בלבד ועל פי המסמכים, במידה 
       והוצגו בפני במהלך הסיור. יש לציין, כי יתכן שבכל שלב עבודות הבנייה ובמצב הפיזי שלאחר מכן, היו או 
       יתכנו ליקויים נסתרים שלא היו חשופים/או היו נסתרים/או לא היו קיימים בעת ביקורי (סדקים, 
       רטיבויות, עובש או פגמים אחרים) ולכן אינם נכללים בחוות דעתי זו. ליקוים אלו עלולים להופיע במהלך 
       המגורים או בשימוש הממושך של מערכות שונותבנכס וניתן להשלים עבורם חוות דעת נוספת או נספח 
       לדו"ח הקיים.</p>
<p>14.  חוות דעת זו ערוכה על פי דרישות תקנים ו/או תקנות שהיו בתוקף בזמן עבודות הבנייה.</p>
<p>15. חוות דעת עוסקת אך ורק בליקויים בעבודות שכבר בוצעו .</p>
<p>16.  מצ"ב תצלומים שבוצעו על ידי במהלך הבדיקה בנכס הנ"ל והינם מהווים חלק בלתי נפרד מחוות דעתי זו.</p>
<p>17.  התלווה/התלוותה/התלוו לביקור מר צבי פרידמן.</p>   
<p>18.  יודגש כי חלל חדרים רטובים  נבדק ללא אור יום מספיק וללא אור חשמלי.</p> 
<p>19.  הנכס אינו מאוכלס כיום ויתכנו ליקויים אשר היה ניתן לאתר במידה והמערכות היו בשימוש סדיר.</p>
   יש לציין: בלי פירוק מדגמי ובדיקת מעבדה מאושרת לא ניתן לבדוק טיב החומרים שמהם נבנה המבנה.</p>
<p>20.   חוות דעת זו אינה עוסקת במערכות ברמת מהנדסי חשמל, אינסטלציה, מיזוג ומהנדסי מכונות.</p>

        <hr>
        <h1 style="text-align: center;">ממצאים</h1>
        <hr style="border: solid black 2px;">
        <?php
          $chapters = array("עבודות איטום " => 0,
                            "אי התאמה וסטיות " => 0,
                            "עבודות נגרות ודלתות " => 0,
                            "מתקני תברוהא " => 0,
                            "מתקני חשמל " => 0,
                            "עבודוצ טיח " => 0,
                            "עבודות ריצוץ וחיפוי " => 0,
                            "עבודות צביעה " => 0,
                            "עבודות אלומיניום " => 0,
                            "עבודות אבן " => 0,
                            "מיזוג אוויר " => 0,
                            "אלמנטים מתועשים " => 0,
                            "מרחבים מוגנים " => 0,
                            "שונות" => 0,);
          
          foreach ($report_data as $key=>$value) {
            $value  = str_replace("_", " ", $value);
            $chapters[$value["chapter"]]++;
          };

          $chapters_names = array_keys($chapters);
          $subChaptersNames = array();

          foreach ($report_data as $key=>$value) {
            $value  = str_replace("_", " ", $value);
            if (!(in_array($value["title"], $subChaptersNames))) {
              array_push($subChaptersNames, $value["title"]);
            }
          } 

          $printedSubchapters = array();
          // foreach ($subChaptersNames as $key => $value) {
          //   echo $value.'<br>';
          // }


          foreach ($chapters_names as $i => $chapteri) {
            $numItems = count($report_data);
            $counter = 0;
            echo '<p>'.($i+1).".<strong style='text-decoration: underline;'> ".$chapters_names[$i].'</strong></p>';
            $chapterPrice = 0;
            foreach ($report_data as $key=>$value) {
              $value  = str_replace("_", " ", $value);
              // Chapter Selection
              if ($value["chapter"] == $chapters_names[$i]) { 
                // foreach ($subChaptersNames as $j => $subChaptersName) {
                //   if (!(in_array($value["title"], $printedSubchapters))) {
                //     echo $value["title"];
                //   };
                    echo '<p>&nbsp; &nbsp; 1. <strong>נושא:</strong> &nbsp;'.$value["title"].'</p>
                          <p>&nbsp; &nbsp; 2. <strong>מיקום:</strong> &nbsp;'.$value["location"].' בחדר: '.$value['room'].'</p>
                          <p>&nbsp; &nbsp; 3. empty space to link from a different db</p>
                          <p>&nbsp; &nbsp; 4. <strong>הערות:</strong> &nbsp;'.$value["notes"].'</p>
                          <p>&nbsp; &nbsp; 5. <strong>תמונה:</strong> &nbsp;'.$value["picture"].'</p>
                          <p>&nbsp; &nbsp; 6. <strong>מחיר:</strong> &nbsp;'.$value["subChapterPrice"].' ₪ </p>
                          <br><br>';
                    array_push($printedSubchapters, $value["title"]);
                    $chapterPrice  = $chapterPrice  + (int)$value["subChapterPrice"];
//              };
              };      
              if(++$counter === $numItems) {
                echo '<p>&nbsp; &nbsp; &nbsp; &nbsp;<strong> מחיר מוערך לפרק: '.$chapterPrice. ' ₪ <br>';
              }
          };     
        };
      } else { ?>
        <h1>Error Go <a href='index.php'>Back</a></h1>
    <?php } ?>
  </body>
</html>

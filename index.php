<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> בדק בית </title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-sm-offset-6 col-md-offset-6">
                    <img src="images/logo.jpg" alt="logo" id="logo">
                </div>
            </div>
            <!-- /header -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="forms-container float-right">
                        <h1 id="pageTitle" class="title">פרטי הלקוח והנכס</h1>
                        <form method="post" id="clientForm" accept-charset="UTF-8>">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>ישוב</lable>
                                        <input type="text" class="form-control" id="city" placeholder="ישוב" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>מספר</lable>
                                        <input type="number" class="form-control" id="addressNumber" placeholder="מספר" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>רחוב</lable>
                                        <input type="text" class="form-control" id="address" placeholder="רחוב" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>שם הלקוח</lable>
                                        <input type="text" class="form-control" id="name" placeholder="שם" required>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        <h4>הגדרות הנכס</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>סוג הבדיקה</lable>
                                        <select id="testType" class="form-control" required>
                                                    <option value="חישוב_כמויות">חישוב כמויות</option>
                                                    <option value="שלד" >שלד</option>
                                                    <option value="רטיבות" >רטיבות</option>
                                                    <option value="בדק_בית" >בדק בית</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>מס חדרים</lable>
                                        <input type="number" class="form-control" id="roomNum" placeholder="מס חדרים" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>סוג הנכס</lable>
                                        <select id="propertyType" class="form-control" required>
                                            <option value="וילה" class="prati" >וילה</option>
                                            <option value="דופלקס" class="prati" >דופלקס</option>
                                            <option value="דירה" class="building" >דירה</option>
                                            <option value="דירת גן" class="building" >דירת גן</option>
                                            <option value="פנטהאוס" class="building" >פנטהאוס</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>הגדרת הנכס</lable>
                                        <select id="buildingType" class="form-control" required>
                                            <option value="פרטי" >פרטי</option>
                                            <option value="משותף" >משותף</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>קומות בנכס</lable>
                                            <input type="number" class="form-control building" id="buildingHeight" placeholder="קומות בבניין" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>קומה</lable>
                                            <input type="number" class="form-control building" id="floor" placeholder="קומה" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>כניסה</lable>
                                            <input type="text" class="form-control building" id="entrance" placeholder="כניסה" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>מס מפלסים</lable>
                                            <input type="number" class="form-control" id="levels" placeholder="מס מפלסים" required>
                                        </div>
                                    </div>
                            </div>
                        <hr>
                        <h4>פרטי הנכס</h4>
                            <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>מחסן</lable>
                                            <input type="text" class="form-control" id="wareHouse" placeholder="מחסן" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable >חנייה</lable>
                                            <select class="form-control" id="parking" placeholder="חנייה" required>
                                                <option value="בין_עמודים">ניצבת בין עמודים וקירות</option>
                                                <option value="מקורה">חניה מקורה</option>
                                                <option value="לא_מקורה">לא מקורה</option>
                                                <option value="חניון_תת_קרקעי">חניון תת קרקעי</option>
                                                <option value="חניון_עילי">חניון עילי</option>
                                                <option value="מכפיל_חניה">מכפיל חניה</option>
                                                <option value="חניה_אלכסונית">חניה אלכסונית</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>נכס חדש?</lable>
                                            <select type="text" class="form-control" id="buildingNew" placeholder="נכס חדש?" required>
                                                <option value="חדש">חדש</option>
                                                <option value="ישן">ישן</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <lable>גיל הנכס</lable>
                                            <input type="number" class="form-control" id="buildingAge" placeholder="גיל הנכס" required>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>מפרטים</lable>
                                            <select type="text" class="form-control" id="specifications" placeholder="נכס חדש?" required>
                                                <option value="הוצגו">הוצגו</option>
                                                <option value="לא_הוצגו">לא הוצגו</option> 
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>סוג חיפוי</lable>
                                        <input type="text" class="form-control" id="claddingType" placeholder="סוג חיפוי" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>תוכניות</lable>
                                        <select type="text" class="form-control" id="plansB" placeholder="תוכניות" required>
                                            <option value="הוצגו">הוצגו</option>
                                            <option value="לא_הוצגו">לא הוצגו</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>חזיתות</lable>
                                        <input type="text" class="form-control" id="fronts" placeholder="חזיתות" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>לפי תוכניות</lable>
                                        <select type="text" class="form-control" id="accordingPlan" placeholder="לפי תוכניות" required>
                                            <option value="לפי_התוכנית">לפי התוכנית</option>
                                            <option value="לא_לפי_התוכנית">לא לפי התוכנית</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>שינויים</lable>
                                        <select type="text" class="form-control" id="changes" placeholder="שינויים" required>
                                            <option value="הוצגו">הוצגו</option>
                                            <option value="לא_הוצגו">לא הוצגו</option> 
                                        </select>    
                                     </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>תאריך קבלה</lable>
                                        <input type="date" class="form-control" id="reciveDate" placeholder="תאריך קבלה" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>תאריך כניסה</lable>
                                        <input type="date" class="form-control" id="entryDate" placeholder="תאריך כניסה"ל required>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        <h4>פרטי התקשרות</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>מחיר</lable>
                                        <input type="number" class="form-control" id="price" placeholder="מחיר" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>טלפון</lable>
                                            <input type="tel" class="form-control" id="clientTel" placeholder="טלפון" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="email" class="form-control" id="clientMail" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="client_submit">פתח דו"ח</button>
                            </div>
                        </form>

                        <!-- REPORT START -->
                        
                        <div id="report-containe" class="report-container">
                            <h1 class="title">ליקויי בנייה</h1>
                            <form id="reportForm" accept-charset="UTF-8">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">חדר</label>
                                            <div id="roomSelect">   
                                                <select id="room" class="form-control">
                                                    <option disabled selected value="">בחר חדר</option>
                                                    <option value="חדר הורים">חדר הורים</option>
                                                    <option value="חדר 1" >חדר 1</option>
                                                    <option value="חדר 2" >חדר 2</option>
                                                    <option value="חדר 3" >חדר 3</option>
                                                    <option value="סלון" >סלון</option>
                                                    <option value="מטבח" >מטבח</option>
                                                    <option value="שירותי הורים" >שירותי הורים</option>
                                                    <option value="שירותים 2" >שירותים 2</option>
                                                    <option value="שירותים 3" >שירותים 3</option>
                                                    <option value="מחסן" >מחסן</option>
                                                    <option value="מרפת 1" >מרפת 1</option>
                                                    <option value="מרפסת 2" >מרפסת 2</option>
                                                    <option value="חצר" >חצר</option>
                                                    <option value="חנייה" >חנייה</option>
                                                    <option value="מרתף" >מרתף</option>
                                                    <option value="שונות" >אחר</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">פרק</label>
                                            <div id="chapterSelect">
                                                <select id="chapter" class="form-control" disabled="true">
                                                    <option  disabled selected value="" class="select-first">קודם בחר חדר</option>
                                                    <option  disabled value="select_title" class="select-title">בחר פרק</option>
                                                    <option value="אי_התאמה_וסטיות " class="room">אי התאמה וסטיות</option>
                                                    <option value="עבודות_איטום " class="room">עבודות איטום</option>
                                                    <option value="עבודות_נגרות_ודלתות " class="room">עבודות נגרות ודלתות</option>
                                                    <option value="מתקני_תברואה " class="room">מתתקני תברואה</option>
                                                    <option value="מתקני_חשמל " class="room">מתקני חשמל</option>
                                                    <option value="עבודוצ_טיח " class="room">עבודות טיח</option>
                                                    <option value="עבודות_ריצוץ_וחיפוי " class="room">עבודות ריצוף וחיפוי</option>
                                                    <option value="עבודות_צביעה " class="room">עבודות צביעה</option>
                                                    <option value="עבודות_אלומיניום " class="room">עבודות אלומיניום</option>
                                                    <option value="עבודות_אבן " class="room">עבודות אבן</option>
                                                    <option value="מיזוג_אוויר " class="room">מיזוג אוויר</option>
                                                    <option value="אלמנטים_מתועשים " class="room">אלמנטים מתועשים</option>
                                                    <option value="מרחבים_מוגנים " class="room">מרחבים מוגנים</option>
                                                    <option value="שונות" class="room">שונות</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                             <label for="">נושא</label>
                                             <div id="subChapterSelection">
                                                    <select id="subChapter" class="form-control" disabled>
                                                        <option disabled selected value="">בחר פרק</option>
                                                        <option disabled value="select_title">בחר נושא</option>

                                                        <option value="מיקום_מכונת_כביסה" class="אי_התאמה_וסטיות">מיקום מכונת כביסה</option>
                                                        <option value="מיקום_מקרר" class="אי_התאמה_וסטיות">מיקום מקרר</option>
                                                        <option value="מידות_חדרים" class="אי_התאמה_וסטיות">מידות חדרים</option>

                                                        <option value="כתמי_רטיבות_מלווים_בקילופי_טיח" class="עבודות_איטום">כתמי רטיבות מלווים בקילופי טיח</option>
                                                        <option value="חדירת_מים_דרך_קירות_חוץ" class="עבודות_איטום">חדירת מים דרך קירות חוץ</option>
                                                        <option value="ביצוע_מחדש_איזורי_מעבר_צינורות" class="אי_התאמה_וסטיות">ביצוע מחדש איורי מעבר צינורות</option>
                                                        <option value="החפייה_בין_יריעות_איטום" class="אי_התאמה_וסטיות">החפייה בין יריעות איטום</option>
                                                        <option value="חסרות_רשתות_הגנה_מפני_סתימות" class="אי_התאמה_וסטיות">חסרות רשתות הגנה מפני סתימות </option>
                                                        <option value="שיפועים_לקויים" class="אי_התאמה_וסטיות">שיפועים לקויים</option>

                                                        <option value="לא_קיים_סימון_בידוד_אקוסטי" class="עבודוצ_נגרות_ודלתות">לא קיים סימון בידוד אקוסטי</option>
                                                        <option value="כיוון_והתאמה_דלתות_פנים" class="עבודוצ_נגרות_ודלתות">כיוון והתאמה דלתות פנים</option>
                                                        <option value="נקיון_דלתות" class="עבודוצ_נגרות_ודלתות">ניקיון דלתות</option>
                                                        <option value="צביעה_לקויה" class="עבודוצ_נגרות_ודלתות">צביעה לקויה</option>
                                                        <option value="ארונות_מטבח" class="עבודוצ_נגרות_ודלתות">ארונות מטבח</option>
                                                        <option value="ארונות_אמבטיה" class="עבודוצ_נגרות_ודלתות">ארונות אמבטיה</option>
                                                        <option value="פגמים_חזותיים" class="עבודוצ_נגרות_ודלתות">פגמים חזותיים במשקוף</option>
                                                        <option value="מרווח_בי_כנף_הדלת_לאריח" class="עבודוצ_נגרות_ודלתות">מקווח בין כנף הדלת לאריח</option>
                                                        <option value="תיקון_גומיית_אטם" class="עבודוצ_נגרות_ודלתות">תיקון גומיית אטם</option>
                                                        <option value="ניקיון_דלת" class="עבודוצ_נגרות_ודלתות">ניקיון דלת</option>

                                                        <option value="אמבט_תרמו_פלסטי" class="מתקני_תברואה">אמבט תרמו פלסטי</option>
                                                        <option value="מפגש_ריצוף_ואריחי_חיפוי_קיר" class="מתקני_תברואה">מפגש ריצוף ואריחי קיר</option>
                                                        <option value="מכסים_ורשתות_קופסאות_בקרה" class="מתקני_תברואה">מכסים ורשתות לקופסאות בקרה</option>
                                                        <option value="פינת_קרמיקה" class="מתקני_תברואה">פינת קרמיקה</option>
                                                        <option value="בדיקת_מערכוצ" class="מתקני_תברואה">בדיקת מערכות</option>
                                                        <option value="מכסים_לאסלות" class="מתקני_תברואה">מכסים לאסלות</option>
                                                        <option value="איטום_יציאות_לברזים" class="מתקני_תברואה">איטום יציאות לברזים</option>
                                                        

                                                        <option value="סימול_מתגים_בלוח_החשמל" class="מתקני_חשמל">סימול מתגים בלוח החשמל</option>
                                                        <option value="השלמת_ווי_תלייה_לגופי_תאורה" class="מתקני_חשמל">השלמת ווי תליי לגופי תאורה</option>
                                                        <option value="השלמת_ארמטורות_למנורות_חשופות" class="מתקני_חשמל">השלמת ארמטורות למנורות חשופות</option>
                                                        <option value="תיקון_מפסקים" class="מתקני_חשמל">תיקון מפסקים</option>
                                                        <option value="להשלים_כיסויי_פנימי_בארון_תקשורת" class="מתקני_חשמל">השלמת כיסוי פנימי בארון תקשורת</option>
                                                        <option value="דלתות_ארונות_חשמל_ותקשורת" class="מתקני_חשמל">דלתות ארונות חשמל ותקשורת</option>

                                                        <option value="סדקים_בפינת_חלון" class="עבודות_טיח">סדקים בפינת חלון</option>
                                                        <option value="קיר_עקום" class="עבודות_טיח">קיר עקום</option>
                                                        <option value="חיפוי_לא_גמור" class="עבודות_טיח">חיפוי לא גמור</option>
                                                        <option value="השלמת_שליכט" class="עבודות_טיח">השלמת שליכט</option>

                                                        <option value="גימור_ריצוף_לקוי" class="עבודות_חיפוי_וריצוף">גימור ריצוף לקוי</option>
                                                        <option value="מסירת_אריחים_רזרביים" class="עבודות_חיפוי_וריצוף">מסירת אריחים רזרביים</option>
                                                        <option value="אריחים_פגומים" class="עבודות_חיפוי_וריצוף">אריחים פגומים</option>
                                                        <option value="מילוי_רובה" class="עבודות_חיפוי_וריצוף">מילוי רובה</option>
                                                        <option value="השלמת_רובה" class="עבודות_חיפוי_וריצוף">השלמת רובה</option>
                                                        <option value="מילוי_רובה_במשקים" class="עבודות_חיפוי_וריצוף">מילוי רובה במשקים</option>
                                                        <option value="מישק_הפקדה_גמיש" class="עבודות_חיפוי_וריצוף">מישק הפרדה גמיש</option>  
                                                        <option value="פרופילי_מתכת" class="עבודות_חיפוי_וריצוף">פרופילי מתכת</option>
                                                        <option value="חיתוך_אריחים" class="עבודות_חיפוי_וריצוף">חיתוך אריחים</option>
                                                        <option value="הוראות_תחזוקה" class="עבודות_חיפוי_וריצוף">הוראות תחזוקה</option>
                                                        <option value="פני_הרצפה" class="עבודות_חיפוי_וריצוף">פני הרצפה</option>
                                                        <option value="תכנון_לקוי" class="עבודות_חיפוי_וריצוף">תכנון לקוי</option>
                                                        <option value="פס_הפרדה" class="עבודות_חיפוי_וריצוף">פס הפרדה</option>
                                                        <option value="חללים_מאחורי_אריח" class="עבודות_חיפוי_וריצוף">חללים מאוחרי אריח</option> 
                                                        <option value="ביצוע_ניקיון" class="עבודות_חיפוי_וריצוף">ביצוע ניקיון</option>

                                                        <option value="קילופי_צבע" class="עבודות_צביעה">קילופי צבע</option>
                                                        <option value="צביעה_לקויה" class="עבודות_צביעה">צביעה לקויה</option>

                                                        <option value="אטימת_חלונות" class="עבודות_אלומיניום">אטימת חלונות</option>
                                                        <option value="הוספת_זוויתנים" class="עבודות_אלומיניום">הוספת זוויתנים</option>
                                                        <option value="הקטנת_מרווחים" class="עבודות_אלומיניום">הקטנת מרווחים</option>
                                                        <option value="כיוון_דלתות" class="עבודות_אלומיניום">כיוון דלתות</option>
                                                        <option value="כיוון_חלונות" class="עבודות_אלומיניום">כיוון חלונות</option>
                                                        <option value="הגבלת_פתיחה" class="עבודות_אלומיניום">הגבלת פתיחה</option>
                                                        <option value="פינות הלבשות" class="עבודות_אלומיניום">פינות הלבשות</option>
                                                        <option value="הוספת_מכסים" class="עבודות_אלומיניום">הוספת מכסים</option>
                                                        <option value="ארגז תריס" class="עבודות_אלומיניום">ארגז תריס</option>
                                                        <option value="חיכוך_בין_דלתות" class="עבודות_אלומיניום">חיכוך בין דלתות</option>
                                                        <option value="מדבקת_בטיחות" class="עבודות_אלומיניום">מדבקת בטיחות</option>
                                                        <option value="שיוף_פינות_חדות" class="עבודות_אלומיניום">שיוף פינות חדות</option>
                                                        <option value="אטימת_חלונות" class="עבודות_אלומיניום">אטימת חלונות</option>

                                                        <option value="גוון_האבן" class="עבודות_אבן">גוון האבן</option>
                                                        <option value="השלמת_רובה" class="עבודות_אבן">השלמת_רובה</option>
                                                        <option value="איטום" class="עבודות_אבן">איטום</option>
                                                        <option value="חיפוי_אבן" class="עבודות_אבן">חיפוי אבן</option>
                                                        <option value="פוגות" class="עבודות_אבן">פוגות</option>
                                                        <option value="אישור_זיגוג" class="עבודות_אבן">אישור זיגוג</option>
                                                        <option value="פגמים_באבני_חיפוי" class="עבודות_אבן">פגמים באבני חיפוי</option>
                                                        <option value="ספי_שיש" class="עבודות_אבן">ספי שיש</option>
                                                        <option value="נדבך_ראש" class="עבודות_אבן">נדבך ראש</option>
                                                        <option value="גוון_האבן" class="עבודות_אבן">גוון האבן</option>

                                                        <option value="צינורות_ניכוז" class="מיזוג_אוויר">צינורות ניקוז</option>

                                                        <option value="" class="אלמנטים_מתעושים"></option>

                                                        <option value="ידית_דלת" class="מרחבים_מוגנים">ידית דלת</option>
                                                        <option value="מערכת_סינון" class="מרחבים_מוגנים">מערכת סינון</option>
                                                        <option value="משקוף_דלת" class="מרחבים_מוגנים">משקוף ממ"ד</option>
                                                        <option value="לשונית_נעילה" class="עבודות_צביעה">לשונית נעילת</option>
                                                        <option value="נקיון" class="עבודות_צביעה">ניקיון</option>
                                                        <option value="סףף_אדן_חלון" class="עבודות_צביעה">סף אדן חלון</option>
                                                        <option value="פתח_חלון" class="עבודות_צביעה">פתח חלון</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>       
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">מיקום</label>
                                            <input type="text" class="form-control" id="location" placeholder="מיקום">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">הערות</label>
                                            <input type="text" class="form-control" id="notes" placeholder="הערות">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">תמונה</label>
                                            <input type="text" class="form-control" id="photo" placeholder="תמונה">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">מחיר</label>
                                            <input type="number" class="form-control" id="subChapterPrice" placeholder="אופציונאלי">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="reportBtn" class="btn btn-primary">עדכן דו"ח</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="print_container text-right">
                        <a href="print_report.php" class="btn btn-warning"><i class="fa fa-print"></i> הפק דו"ח</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start the script -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- end the script -->
  </body>
</html>

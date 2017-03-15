$(document).ready(function() {
    function appendMessage($sellector, $message, $state) {
        $sellector.find(" > .alert").remove();
        $state ? $messageState = "success" : $messageState = "danger";
        $sellector.prepend("<div class='alert alert-" + $messageState + " text-center'>" +
            $message +
            "</div>");
        console.log($message);
    };

    function resetReportForm() {
            $("#chapterSelect").find('select').css("display", "block");
            $("#extraChapter").remove();
            $("#subChapterSelection").find('select').css("display", "block");
            $("#extraSubChapter").remove();
            $("#roomSelect").find('select').css("display", "block");
            $("#RoomInput").remove();
    };

    $("#clientForm").on("submit", function(e) {
        e.preventDefault();
        $this = $(this);
        $name = $("#name").val();
        $address = $("#address").val();
        $addressNumber = $("#addressNumber").val();
        $city = $("#city").val();
        $testType = $("#testType").val();
        $buildingType = $("#buildingType").val();
        $propertyType = $("#propertyType").val();
        $roomNum = $('#roomNum').val();
        $levels = $('#levels').val();
        $entrance = $('#entrance').val();
        $floor = $('#floor').val();
        $buildingHeight = $('#buildingHeight').val();
        $buildingAge = $('#buildingAge').val();
        $buildingNew = $('#buildingNew').val();
        $parking = $('#parking').val();
        $warehouse = $('#wareHouse').val();
        $fronts = $('#fronts').val();
        $claddingType = $('#claddingType').val();
        $plansB = $('#plansB').val();
        $specifications = $('#specifications').val();
        $changes = $('#changes').val();
        $accordingPlan = $('#accordingPlan').val();
        $price = $('#price').val();
        $clientTel = $('#clientTel').val();
        $clientMail = $('#clientMail').val();
        $entryDate = $('#entryDate').val();
        $reciveDate = $('#reciveDate').val();

        $customerData =
            "name=" + $name + "&address=" + $address +
            "&addressNumber=" + $addressNumber + "&city=" + $city +
            "&testType=" + $testType + "&buildingType=" + $buildingType +
            "&propertyType=" + $propertyType + "&roomNum=" + $roomNum +
            "&levels=" + $levels + "&entrance=" + $entrance +
            "&floor=" + $floor + "&buildingHeight=" + $buildingHeight +
            "&buildingAge=" + $buildingAge + "&buildingNew=" + $buildingNew +
            "&parking=" + $parking + "&warehouse=" + $warehouse +
            "&fronts=" + $fronts + "&claddingType=" + $claddingType +
            "&plansB=" + $plansB + "&specifications=" + $specifications +
            "&changes=" + $changes + "&accordingPlan=" + $accordingPlan +
            "&price=" + $price + "&clientTel=" + $clientTel +
            "&clientMail=" + $clientMail + "&entryDate=" + $entryDate +
            "&reciveDate=" + $reciveDate +
            "&submitType=" + "customerData";

        $.ajax({
            type: "POST",
            url: "insert_data.php",
            data: $customerData,
            success: function(result) {
                console.log(result);
                $responseData = JSON.parse(result);
                $result = $responseData[0];
                $message = $responseData[1];
                if ($message) {
                    // $this.find(".form-control").prop("disabled", true);
                    // $this.find("#client_submit").parent().remove();
                    appendMessage($this, $message, 1);
                    $("#pageTitle").fadeOut('slow');
                    $("#clientForm").fadeOut('slow');
                    $(".report-container").slideDown();
                } else {
                    appendMessage($this, $message, 0);
                }
            }
        });
    });

    $("#reportForm").on("submit", function(e) {
        e.preventDefault();
        $this = $(this);
        $room = $("#room").val() || $("#extraRoom").val();
        $chapter = $("#chapter").val() || $("#extraChapter").val();
        $subChapter = $("#subChapter").val() || $("#extraSubChapter").val();
        $location = $("#location").val();
        $notes = $("#notes").val();
        $photo = $("#photo").val();
        $subChapterPrice = $("#subChapterPrice").val() || 0;
        //TODO FIX ROOM SHONOT 
        if ($room == 'שונות' || null) {
            $('#room').val($('#RoomInput'));
        }
        console.log($room);
        console.log($('#RoomInput').val());
        if ($room == null || $chapter == null || $subChapter == null || $room == "select_title" || $chapter == "select_title" || $subChapter == "select_title" || $location == '' || $notes == '' || $photo == '') {
            appendMessage($this, "Please Enter All Values", 0);
        } else {
            $reportData = "room=" + $room + "&chapter=" + $chapter + "&subChapter=" + $subChapter + "&location=" + $location + "&notes=" + $notes + "&photo=" + $photo + "&subChapterPrice=" + $subChapterPrice + "&submitType=reportData";
            $.ajax({
                type: "POST",
                url: 'insert_data.php',
                data: $reportData,
                success: function(result) {
                    console.log(result);
                    $responseData = JSON.parse(result) ;
                    $result = $responseData[0];
                    $message = $responseData[1];
                    if ($message) {
                        appendMessage($this, $message, 1);
                        $this.find("select").val("");
                        $this.find(".form-control").val("");
                        $('.print_container').slideDown('slow');
                        resetReportForm();
                        $('#reportForm').trigger("reset");
                    } else {
                        appendMessage($this, $message, 0);
                    }
                }
            });
        }
        return false;
    });

    $(document).on("click", ".alert", function() {
        $(this).slideUp();
    });

    $("#buildingType").on("change", function() {
        let buildingTypeValue = $("#buildingType").val();
        if (buildingTypeValue === "פרטי") {
            $('.building').prop("disabled", true);
            $('.prati').prop("disabled", false); 
        }
        else {
           $('.prati').prop("disabled", true);
           $('.building').prop("disabled", false); 
        }
    });


    $("#room").on("change", function() {
        let roomValue = $("#room").val();
        if (roomValue === 'שונות') {
            $("#roomSelect").find('select').css("display", "none");
            $("#roomSelect").append('<input type="text" id="RoomInput" class="form-control RoomInputDelete" value="שונות" placeHolder="הכנס חדר">')
        }
        $("#chapter").prop("disabled", false);
        // $chapterSelect = $("#chapter");
        // $value = $(this).val();
        // $chapterSelect.val("select_title");
    });

    $("#chapter").on("change", function() {
        let chapterValue = $("#chapter").val();
        if (chapterValue === 'שונות') {
            $("#chapterSelect").find('select').css("display", "none");
            $("#chapterSelect").append('<input type="text" id="extraChapter" value="שונות" class="form-control" placeHolder="הכנס נושא">')
                // Change sub chapter select
            $("#subChapterSelection").find('select').css("display", "none");
            $("#subChapterSelection").append('<input type="text" id="extraSubChapter" class="form-control" value="שונות" placeHolder="הכנס תת נושא">');
        };
        $subChapterSelect = $("#subChapter");
        $subChapterSelect.prop("disabled", false);
        $value = $(this).val();
        $subChapterSelect.find("option").css("display", "none").parent().find("." + $value + ", .select-title").css("display", "block");
        $subChapterSelect.val("select_title");
    });
});

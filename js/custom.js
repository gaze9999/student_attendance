let sInput = $('#sInput');
let btnInput = $('#btn-add');

btnInput.on('mouseup', function(e){
    // alert(sInput.val());
    $.ajax({
        type: "POST",
        url: "./addStudent.php",
        dataType: "json",
        data: { //傳送資料
            name: sInput.val()
        },
        success: function(json) {
            alert("ok: "+ sInput.val());
            // console.log(json.info);
        },
        error: function( jqXHR, textStatus ) {
            alert("no");
            console.log(textStatus);
        }
    })
});
let sInput = $('#sInput');
let btnInput = $('#btn-add');

btnInput.on('mouseup', function(e){
    // alert(sInput.val());
    $.ajax({
        type: "POST",
        url: "./addStudent.php",
        dataType: "json",
        data:{
            name: sInput.val()
        }
        // success: function() {
            
        // },
        // error: function() {

        // }
    });
});
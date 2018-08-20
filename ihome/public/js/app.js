$(document).ready(function () {
    $(".validation").validate();
    $(".validator").validate();
    $(".valid").validate();
})

$(".mpesa").click(function(){
    $.ajax({
        method: 'POST',
        url: "{{url('/mpesa')}}",
        data: $(this).serialize(),
        datatype: "json",
        success: function () {
            alert("success");
        }
    })

});

$(".eras").on('submit', function () {
    alert("Submitted Successfully!!");
});

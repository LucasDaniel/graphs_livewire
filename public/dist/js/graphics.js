
$.ajax({
    url: "http://localhost:8000/api/graphics/id-user-task", 
    success: function(result){
        console.log("retorno");
        console.log(result);
    }
});

$(document).ready(function(){
    
//    Load Table Data 
    function loadTable(){
        $.ajax({
            url : "ajax-load.php",
            type : "POST",
            success : function(data){
                $("#table-data").html(data);
            }
        });
    }
    loadTable();
    
//    Insert New Record
    $("#save-btn").on("click", function(e){
        e.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        if(fname == "" | lname == ""){
            alert("All fields are required.");
        }else{
            $.ajax({
                url : "ajax-insert-data.php",
                type : "POST",
                data : {first_name : fname, last_name : lname},
                success : function(data){
                    if(data == 1){
                        loadTable();
                        $("#addForm").trigger("reset");
                        alert("Data Inserted Successfully");
                    }else{
                        alert("Can't save record.");
                    }
                }
            });
        }
    });
    
//    Delete Record Data
    $(document).on("click", ".delete-btn", function(){
        if(confirm("Are you sure delete this record?")){
            var student_id = $(this).data("id");
            var element = this;
            $.ajax({
                url : "ajax-delete-data.php" ,
                type : "POST",
                data : {sid : student_id},
                success : function(data){
                    if(data == 1){
                        $(element).closest("tr").fadeOut();
                    }else{
                        alert("Can't delete Data");
                    }
                }
            });
        }else{
            return false;
        }
    });
    
//    Show Modal Box
    $(document).on("click", ".edit-btn", function(){
        $("#modal").show();
        var studentId = $(this).data("eid");
        $.ajax({
            url : "load-updata-form.php",
            type : "POST",
            data : {id : studentId},
            success : function(data){
                $("#modal-form table").html(data);
            }
        })
        
    });
    
//    Save update form 
    $(document).on("click", "#edit-submit", function(){
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();

        $.ajax({
            url : "ajax-update-form.php",
            type : "POST",
            data : {uid : stuId, first_name : fname, last_name : lname},
            success : function(data){
                if(data == 1){
                    $("#modal").hide();
                    loadTable();
                }else{
                    alert("Update Failed.");
                }
            }
        })
    })
    
    
//    Hide modal box
    $("#close-btn").on("click", function(){
       $('#modal').hide();
    });
    
//    Live Search 
    $("#search").on("keyup", function(){
        var searchItem = $(this).val();
        $.ajax({
            url : "ajax-live-search.php",
            type : "POST",
            data : {search : searchItem},
            success : function(data){
               $("#table-data").html(data);
            }
        });
    });
});
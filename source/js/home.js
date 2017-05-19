





function getBase64Image(imgElem) {
// imgElem must be on the same server otherwise a cross-origin error will be thrown "SECURITY_ERR: DOM Exception 18"
    var canvas = document.createElement("canvas");
    canvas.width = imgElem.clientWidth;
    canvas.height = imgElem.clientHeight;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(imgElem, 0, 0);
    var dataURL = canvas.toDataURL("image/png");
    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}



//Read input image file

function readURL(input) {
	//alert("test");
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#pro-img-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function clearPwdContent(){
		
		$("#cur_pwd").val("") ;
		$("#new_pwd").val("") ;
		$("#con_new_pwd").val("");
		$("#btn-pwd-change").attr('disabled','disabled');

}





$(document).ready(function(){


	//Get some content from db


		$.ajax({

			type:'GET',
			url: "../home/getdata.php",
			//context: document.body,
			dataType:"html",
			success: function(response){
				
				$("#tb-view").html(response);

			}



		}); 



		$(function(){


			$('#table').bootstrapTable({
		        resizable: true,
		        headerOnly: true,
		        data: data
		    });

		});



		/*

	$(document).ready(function(){
	    setTimeout(function(){
	 	//alert("Testing");




	     }); // milliseconds
	});

		
*/
	//




	$("#btn1").click(function(){

		alert("Testing");
	});

	$("#btn-signout").click(function(){

		//alert("I'll leaving you !");
		//window.open("../login","_self");
		document.location = "../source/config/logout.php";

	});


	

	$("#btn-pwd-cancel").click(function(){
			$("#error-info").html("");
		clearPwdContent();

	});

	$("#btn-gen-cacnel").click(function(){

		$("#gen-error").html("");
	});

	

	$("#con_new_pwd,#new_pwd,#cur_pwd").keyup(function(){
			var cur_pwd = $("#cur_pwd").val();
			var new_pwd = $("#new_pwd").val();
			var con_new_pwd = $("#con_new_pwd").val();

			if (cur_pwd != ""){

				if (con_new_pwd != new_pwd){


						$("#btn-pwd-change").attr('disabled','disabled');
						
					

					$("#error-info").html("<span class='label label-danger'>Confirm password not match !</span>");	
					
						
				}else{

					if (new_pwd != ""  && con_new_pwd != ""){


					

						$("#btn-pwd-change").removeAttr('disabled');
						$("#error-info").html("<span class='label label-success'>Confirm password  match !</span>");		

					}

						

						
						
				}	
			}else{

					$("#btn-pwd-change").attr('disabled','disabled');

			}			

	});


	$("#txtfname").keyup(function(){
		$("#gen-error").html("");

		//alert("Testing 001");
		var fname = $("#txtfname").val();

		if (fname != ""){
			$("#btn-gen-setting-change").removeAttr('disabled');
		}else{
			$("#btn-gen-setting-change").attr('disabled','disabled');
		}

	});

	//Input Image

	$("#btn-img-browse").change(function(){
    readURL(this);
	});





	//Update User Data infomation

	//general setting change

		$("#btn-gen-setting-change").click(function(){
			
			//var jsobj = {name:"sovann",age:"25",bd:"27-05-17"};

			var fullname = $("#txtfname").val();
			var img = $("#pro-img-preview").attr('src');
			var img_val = $("#btn-img-browse").val();
			




			
			var jsobj = {"option":"general","fullname":fullname,"image": img };
			
			//var jsonobj = JSON.stringify(jsobj);
			
			//jsonobj.image = imgdata;

		
//		
			$.ajax({

				type: "POST",
                //type: "GET",
                //url: "../source/config/user_update.php?q=" + $("#txtfname").val(),
                //url: "../source/config/user_update.php?q="+ jsonobj,
                url: "../source/config/user_update.php",

                data: jsobj,
                //data: new FormData(this),

                dataType: "json",
                
                success: function(response){

                	//var data = JSON.parse(response);

                	//alert(response);
                	//alert(response['ok']);


                   $("#gen-error").html(response['info']);
                   $("#lbfname").html(response['fullname']); 
                   $("#profile").attr('src',response['pro_img']);
                   //console.log(response['profile-img']);
                  //alert(response['pro_img']);


                },
                complete:function(){


                }



            });
		

		});


	//Security chaange


	$("#btn-pwd-change").click(function(){

		//alert("Testing");
		var cur_pwd = $("#cur_pwd").val();
		var new_pwd = $("#new_pwd").val();

		if (new_pwd.length >=6){
				var jsobj = {"option":"security","cur_pwd": cur_pwd ,"new_pwd": new_pwd };
				//var jsonobj = JSON.stringify(jsobj);
				$.ajax({

		                type: "POST",
		                //url: "../source/config/user_update.php?q=" + $("#txtfname").val(),
		                url: "../source/config/user_update.php",
		                data: jsobj,		               
		                dataType: "html",

		                
		                success: function(response){

		                   //alert (response);
		                   $("#error-info").html(response);
		                   clearPwdContent();

		                  //$("#gen-error").html(response);

		                }

		            });

		}else{

			$("#error-info").html("<span class='label label-danger'>Your new password must be six or over six chacractors !</span>");

		}

		


	});

	//--------------------

	//Get Data from server

	$(".Close").click(function(){

		alert("Testing");
	});


	///



//Testing Purpose


$("#btn-test").click(function(){

	var	 imgSrc = $("#pro-img-preview").attr('src');

	$("#imgTest").attr('src',imgSrc);
	$("#profile").attr('src',imgSrc);

	console.log(imgSrc);

});

//Resize table comlume

	$('#maintbl').bootstrapTable({
        resizable: true,
       // headerOnly: true,
        //data: data
    });

//---------------------





/*---------------------*/


});




//Testing


// Bootstap table, with resizable extension. Made to show and hopefully fix issue where TH column drag handle not supported when data-height is set. See https://github.com/wenzhixin/bootstrap-table/issues/1944



$(function () {
    $('#table').bootstrapTable({
    });
});

/**
 * @author: Dennis Hernández
 * @webSite: http://djhvscf.github.io/Blog
 * @version: v1.0.0
 */

(function ($) {
    'use strict';

    var initResizable = function (that) {
        //Deletes the plugin to re-create it
        that.$el.colResizable({disable: true});

        //Creates the plugin
        that.$el.colResizable({
            liveDrag: that.options.liveDrag,
            fixed: that.options.fixed,
            headerOnly: that.options.headerOnly,
            minWidth: that.options.minWidth,
            hoverCursor: that.options.hoverCursor,
            dragCursor: that.options.dragCursor,
            onResize: that.onResize,
            onDrag: that.options.onResizableDrag
        });
    };

    $.extend($.fn.bootstrapTable.defaults, {
        resizable: false,
        liveDrag: false,
        fixed: true,
        headerOnly: false,
        minWidth: 15,
        hoverCursor: 'e-resize',
        dragCursor: 'e-resize',
        onResizableResize: function (e) {
            return false;
        },
        onResizableDrag: function (e) {
            return false;
        }
    });

    var BootstrapTable = $.fn.bootstrapTable.Constructor,
        _toggleView = BootstrapTable.prototype.toggleView,
        _resetView = BootstrapTable.prototype.resetView;

    BootstrapTable.prototype.toggleView = function () {
        _toggleView.apply(this, Array.prototype.slice.apply(arguments));

        if (this.options.resizable && this.options.cardView) {
            //Deletes the plugin
            $(this.$el).colResizable({disable: true});
        }
    };

    BootstrapTable.prototype.resetView = function () {
        var that = this;

        _resetView.apply(this, Array.prototype.slice.apply(arguments));

        if (this.options.resizable) {
            // because in fitHeader function, we use setTimeout(func, 100);
            setTimeout(function () {
                initResizable(that);
            }, 100);
        }
    };

    BootstrapTable.prototype.onResize = function (e) {
        var that = $(e.currentTarget);
        that.bootstrapTable('resetView');
        that.data('bootstrap.table').options.onResizableResize.apply(e);
    }
})(jQuery);





//----------------------



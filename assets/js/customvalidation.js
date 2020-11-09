var login_form = $("#login_form").validate({
                ignore: [],
                rules: {                                            
                        email: {
                                required: true,
                        },
                        password: {
                                required: true,
                        },		
                    }                                        
    });
var add_edit_form = $("#add_edit_form").validate({
                ignore: [],
                rules: {
                        'full_name': {
                                required: true,
                        }, 
                        'age': {
                                required: true,
                        }, 
                        'date_of_birth': {
                                required: true,
                              
                        }, 
                        'locality': {
                                required: true,
                        }, 
                        'no_of_guest': {
                                required: true,
								minlength: 0,
								maxlength: 3,
                        }, 
                        'address': {
                                required: true,
								maxlength: 50,
                        }
                    }                                    
                });
 var admin_users = $("#admin_users").validate({
                ignore: [],
                rules: {                                            
                        'mst_name': {required: true,},
                        'mst_username': {required: true,},
                        'mst_email': {required: true,email:true},                        
                        'mst_mobile_number': {required: true,minlength: 10,maxlength: 10},   
                        'mst_password': {required: true,minlength: 6,maxlength: 10},
                        'mst_conf_password': {required: true,minlength: 6, maxlength: 10,
                                equalTo: "#mst_password"
                        },
                        'mst_status': {required: true}, 
                    }                                        
                });
                

window.setTimeout(function() {
					$(".alert").fadeTo(800, 0).slideUp(800, function(){
					$(this).remove();
					});
					}, 4000);
	
	
	
	
	
	
	
	
	
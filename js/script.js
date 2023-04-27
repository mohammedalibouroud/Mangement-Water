//$(function(){
//var $registerfrom=$("#registration");
/*$.validator.addMethod("noSpace",function(value,element){
    return value==''|| value.trim().length !=0
}, "espace non valide");*/
//if($registerfrom.length){
    //$registerfrom.validate({
        $(document).ready(function(){
            $("#registration").validate({
        rules: {
            
            nom: {required: true},
            prenom: {required: true},
            datn: {required: true},
            adresse: {required: true},
           ville: {required: true},
            tel: {required: true}, 
           email: {required: true,email:true}
        },
        messages: {
            civilite: {required: 'choisie votre civiliter'},
            nom: {required: 'entrer votre nom'},
            prenom: {required: 'entrer votre prenom'},
            datn: {required: 'entrer votre date de naissance'},
            adresse: {required: 'entrer votre adresse'},
           ville: {required: 'entrer votre ville'},
            tel: {required: 'entrer votre telephone'},
           email: {
               required:'entrer votre email',
               email:'entrer un correcte email' }
        
        },
        errorPlacement: function(error,element){
            if(element.is(":radio")){
                error.appendTo(element.parent(".gender"));
            }else
         if(element.is(":checkbox")){
             error.appendTo(element.parent(".hobbies"));
            }else{
                error.insertAfter(element);
            }
        }
    }); 

});
$(document).ready(function(){
	$(".studentform").validate({
		rules:{
			course_category_name:{
				required:true,
			},
			applicant_name:{
				required:true,
			},
			father_name:{
				required:true,
			},
			mother_name: 'required',
			occupation: 'required',
			permanent_address: 'required',
			present_address: 'required',
			mobile:{
				required:true,
				minlength:11,
				maxlength:11,
			},
			nid:'required',
			qualification:'required',
			session:'required',
			birthdate:'required',
		},
	});
});
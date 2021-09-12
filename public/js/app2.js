$(document).ready(function(){
// translate: when the document is fully loaded, launch the function following
	var $heart = $('.heart'),
		$addComment = $(".photo__addcomment-area")
		$ellipsis = $('.fa-ellipsis-h'),
        $popUp = $('.popUp'),
        $closePopup = $('.fa-times'),
        $closePopUpBtn = $('.closePopUpBtn');
// function: declare the variable, and allocate all items with .heart class

	$heart.click(function(){
		var likes = $(this).parent().parent()
					.children('.photo__likes')
					.children('.photo__likes-number'),
			likesNumber = parseInt(likes.html()),
			newValue
		if($(this).hasClass('fa-heart-o')){
			newValue = likesNumber + 1;
		} else{
			newValue = likesNumber - 1;
		}
		likes.html(newValue)
		$(this).toggleClass("fa-heart-o fa-heart")
	});

	$addComment.keydown(function(event){
		//detect if the key is enter//
		if(event.keyCode == 13){
			//save the textarea's value//
			var newComment = event.target.value;
			//select the comment list above textarea//
			var commentList = $(this).parent().parent().children(".comments");
			//empty the value of textarea after press Enter//
			$(this).val('').blur();
			//Append a <li> to comments//
			commentList.append("<li class='photo__comment'>\
						<span class='photo__comment--author'>b_dongjun</span> " + newComment + "</li>");
		}
	})

 	$ellipsis.click(function(){
        //show popup
        $popUp.fadeIn();
    })

    $closePopup.click(closePopup);
    $closePopUpBtn.click(closePopup);

    function closePopup(event){
        event.preventDefault()
        $popUp.fadeOut();
    }
})

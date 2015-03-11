$(document).ready(function () {
	console.log ("heellloo");
    var img_array = [1, 2, 3, 4, 5],
        newIndex = 0,
        index = 0,
        interval = 5000;
    (function changeBg() {

        //  --------------------------
        //  For random image rotation:
        //  --------------------------

            //  newIndex = Math.floor(Math.random() * 10) % img_array.length;
            //  index = (newIndex === index) ? newIndex -1 : newIndex;

        //  ------------------------------
        //  For sequential image rotation:
        //  ------------------------------

            index = (index + 1) % img_array.length;

        $('.my-pictures').css('background', function () {
            $('.my-pictures .background').animate({
                backgroundColor: 'transparent'
            }, 1000, function () {
                setTimeout(function () {
                    $('.my-pictures .background').animate({
                        backgroundColor: 'rgb(255,255,255)'
                    }, 1000);
                }, 3000);
            });
			console.log("images/me" + img_array[index] + ".jpg");
            return 'url(images/me' + img_array[index] + '.jpg)';
        });
		console.log(img_array[index]);
        setTimeout(changeBg, interval);
    })();
});
/*
	jQuery document ready
*/
$(function()
{
	/***
		set timer countdown in seconds with callback
		where 10 define the second left in count.
		after 10 second it will show alert.
		wait for 10 second to see it.
	*/
	
	$('#countdown-1').timeTo(180, function()
	{
		window.close();
	});

	/**
	 * Set timer countdown to specyfied date
	 */
	$('#countdown-2').timeTo(
	{
		timeTo: new Date('Jul 10 2014 00:00:00')
	});
	
	/**
	 * Set theme and captions
	 */
	$('#countdown-3').timeTo(
	{
		/*
			timeTo: date object specify date and time for current time 
			or for countdown to,
			default null.
		*/
		timeTo: new Date('Jul 27 2014 12:00:00'),
		/*
			theme: string name of color theme,
			available "white" and "black",
			default 'white';
		*/
		theme: "black",
		/*
			displayCaption: boolean if true then captions display, default false;
		*/
		displayCaptions: true,
		/*
			fontSize: integer font-size by pixels for digits, default 28;
		*/
		fontSize: 48,
		/*
			captionSize: integer font-size by pixels for captions,
			if 0 then calculate automaticaly, default 0;
		*/
		captionSize: 14
	});
});
jQuery(document).ready(function($) {
    // Calculate the date range for delivery (15 days from now)
    var currentDate = new Date();
    var deliveryStartDate = new Date();
    deliveryStartDate.setDate(currentDate.getDate() + 15);
    var deliveryEndDate = new Date();
    deliveryEndDate.setDate(deliveryStartDate.getDate() + 5);

    // Format the start and end dates as "MMM DD"
    var formattedStartDate = deliveryStartDate.toLocaleString('en-us', { month: 'short', day: 'numeric' });
    var formattedEndDate = deliveryEndDate.toLocaleString('en-us', { month: 'short', day: 'numeric' });

    // Display the delivery message in the paragraph
    var deliveryMessage = 'Delivered till ' + formattedStartDate + ' - ' + formattedEndDate;
    $('.price-wrapper').prepend('<p class="oz_delivered_By">' + deliveryMessage + '</p>');
});c
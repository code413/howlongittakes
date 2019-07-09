let $feedAggregation = $('#feed-aggregation');
$feedAggregation.change(function () {

    if($feedAggregation.val() === 'range'){
        $('#range-answer').removeClass('d-none').find('input').removeAttr('disabled');
        $('#average-answer').addClass('d-none').find('input').attr('disabled');
    }else{
        $('#average-answer').removeClass('d-none').find('input').removeAttr('disabled');
        $('#range-answer').addClass('d-none').find('input').attr('disabled');

    }

});
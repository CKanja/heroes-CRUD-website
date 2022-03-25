<script>
$('.modalLink').click(function(){
    var famID=$(this).attr('data-id');
    var famAddr=$(this).attr('data-addr');
    var famPhone=$(this).attr('data-phone');
    var famName=$(this).attr('data-name');

    $.ajax({url:"somepage.php?famID="+famID+"&famAddr="+famAddr+"&famPhone="+famPhone+"&famName="+famName,cache:false,success:function(result){
        $(".modal-content").html(result)}};
    );
});
</script>
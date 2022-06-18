<div><h2>Color Maker is here !</h2></div>
<script>
    window.addEventListener('load', function(event) {
        var passedColor = <?php echo json_encode($attributes); ?>;
        for( var key in passedColor) {
            if (key.indexOf('--') == 0) {
                console.log(key + ' - ' + passedColor[key])
                change_color(key, passedColor[key]) 
            }
            
        };
    });
</script>
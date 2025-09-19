<button type="button" class="btn btn-info position-absolute top-0 start-0" id="sideButton"><i class="fa-solid fa-bars"></i></button>
<div class="position-absolute top-1start-0 bg-info hide" id="side_menu">
    <ul>
        <li>Woman’s Fashion</li>
        <li>Men’s Fashion</li>
        <li>Electronics</li>
        <li>Home & Lifestyle</li>
        <li>Medicine</li>
        <li>Sports & Outdoor</li>
        <li>Groceries & Pets</li>
        <li>Health & Beauty</li>
    </ul>
</div>

@push('scripts')
    <script type="module">
        $('#sideButton').on('click',function(){
            $('#side_menu').toggleClass('show');
        })
    </script>    
@endpush
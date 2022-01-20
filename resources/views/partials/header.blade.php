<!-- Nav tabs -->
<header class="bg-dark pt-3 d-flex justify-content-center">
    <ul class="nav pills text-center" id="navId" role="tablist">
        <li class="nav-item">
            <a href="{{route('welcome')}}" class="nav-link active" data-bs-toggle="tab">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{route('comics')}}" class="nav-link active" data-bs-toggle="tab">Comics</a>
        </li>
        <li class="nav-item">
            <a href="{{route('adminpage')}}" class="nav-link" data-bs-toggle="tab">ADMIN SECTION</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>

</header>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector('#navId a')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
</script>
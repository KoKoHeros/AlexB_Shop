@include('includes.header')
<!-- shop-page-section -->
<section class="shop-page-section sec-pad">
    <div class="auto-container">
        <div class="row">
            <form action="{{url('savefeaturedproduct')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div><label style="width: 50%">Product Name:</label><input style="border:solid 1px;width: 50%" type="text" name="name"></div>
                <div><label style="width: 50%">price:</label><input  style="border:solid 1px;width: 50%" type="text" name="price"></div>
                <div><label style="width: 50%">Description:</label><input style="border:solid 1px;width: 50%" type="text" name="description"></div>
                {{--<div><label>Tags:</label><input  type="text" name="tags"></div>--}}
                <div><label style="width: 49%">category:</label>
                    <select  type="text" name="category" style="width:50%;border:solid 1px;">
                        //<option name="Beef" style="border:solid 1px;">Beef</option>
                        <option name="Pork" style="border:solid 1px;">Pork</option>
                        <option name="Lamb" style="border:solid 1px;">Lamb</option>
                    </select></div>
                <div><label style="width: 50%">Main Image:</label><input style="width: 50%" type="file" name="main_image"></div>
                <div><label style="width: 50%">Sub Image1:</label><input style="width: 50%" type="file" name="sub_image1"></div>
                <div><label style="width: 50%">Sub Image2:</label><input style="width: 50%" type="file" name="sub_image2"></div>
                <div><label style="width: 50%">SubImage3:</label><input style="width: 50%" type="file" name="sub_image3"></div>
                <div><button type="submit" class="btn btn-primary">Save</button></div>
            </form>
        </div>
    </div>
</section>
<!-- shop-page-section end -->

@include('includes.footer')
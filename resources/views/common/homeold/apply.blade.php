<section class="quote-area pb-100 apply bg-grey" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="quote-image"></div>
            </div>
            <div class="col-lg-6">
                <div class="quote-item">
                    <div class="content">
                        <span>অংশ নাও</span>
                        <h3>নিচের ফর্মে তোমার তথ্য দিয়ে ছবি আপলোড করো। </h3>
                    </div>
                    <form action="/photo-upload" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="নাম" required>
                        </div>
                        {{--    <div class="form-group">
                                <input type="text" class="form-control" name="age" placeholder="বয়স" required>
                            </div>--}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="guardian_phone"
                                   placeholder="মুঠোফোন নম্বর (অভিভাবকের)" value="{{ old('guardian_phone') }}" required>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="address" value="{{ old('address') }}"
                                      placeholder="ঠিকানা "></textarea>
                        </div>

                        <div class="form-group">

                            {{-- <label for="class_group">পছন্দ করো</label>--}}
                            <select class="form-control" name="class_group" id="class_group"
                                    value="{{ old('class_group') }}">
                                <option value="">বিভাগ বাছাই করো</option>
                                <option value="৩–৯ বছর (ক বিভাগ)">৩–৯ বছর (ক বিভাগ)</option>
                                <option value="১০–১২ বছর (খ বিভাগ)">১০–১২ বছর (খ বিভাগ)</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-12">

                                    {{--  <label for="drawing" class="btn btn-info">Try me</label>


                                      <input type="file" class="form-control" name="drawing" value="{{ old('file') }}"
                                             id="imgInp" style="display:none"  required>--}}

                                    <label for="img" class="btn btn-info">এখানে ক্লিক করে ফটো পছন্দ করো</label>
                                    <input type="file" name="drawing" id="img" style="display:none">

                                </div>
                                <div class="col-md-7 col-12">
                                    <img id="blah" src="/images/image-line.svg" width="100%" class="img-thumbnail im"
                                         alt="your image"/>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="default-btn">
                            পাঠিয়ে দাও
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    img.onchange = evt => {
        const [file] = img.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>

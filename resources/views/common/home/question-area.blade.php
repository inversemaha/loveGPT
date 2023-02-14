<section id="question" class="contact-us section">
    <div class="container">
        <div class="contact-head wow fadeInUp" data-wow-delay=".4s"
             style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="single-head">
                        <div class="contant-inner-title">
                            <p>
                                প্রেম–ভালোবাসা–বিয়ে–সংসার—ইত্যাদি নিয়ে জীবনের বাঁকে বাঁকে সম্পর্ককেন্দ্রিক এমন সব জটিল পরিস্থিতির মুখোমুখি হতে হয়, যখন করণীয় বিষয়ে সিদ্ধান্ত নেওয়া কঠিন হয়ে পড়ে। তখন প্রয়োজন হয়বিশেষজ্ঞের পরামর্শ।
                            </p>

                            <p>
                                পাঠক–দর্শকদের পাঠানো এরকম প্রশ্ন এবং উত্তর নিয়ে প্রথম আলো ডিজিটালের বিশেষ আয়োজন:
                                <span class="text-3xl">LoveGPT</span>
                            </p>
                            <p>
                                আপনিও যদি সম্পর্কবিষয়ক কোনো জটিলতার মধ্যে থাকেন, তাহলে সুনির্দিষ্ট সমস্যা বা প্রশ্নটি
                                সাবমিট করুন। পরামর্শ দেবেন দেশসেরা মানসিক রোগ–বিশেষজ্ঞ প্যানেল।
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-12">

                    <div class="form-main">
                        <div class="section-title2 align-center">
                            <span class="wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;" id="response">আপনাদের জিজ্ঞাসা</span>
                        </div>

                        <form class="form" method="post" action="/question-save">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="আপনার নাম" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="আপনার ফোন"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="আপনার ইমেইল" required="required">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group message">
                                        <textarea name="question" placeholder="আপনার জিজ্ঞাসা"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">প্রশ্ন করুন</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const string = "পাঠক–দর্শকদের পাঠানো প্রশ্ন এবং উত্তর নিয়ে প্রথম আলো ডিজিটালের বিশেষ আয়োজন: LoveGPT তে অংশ নিতে রেজিস্ট্রেশন করুন। ";
    let index = 0;
    let direction = 1;

    const type = () => {
        let text = string.substring(0, index);
        document.getElementById("response").innerHTML = text;
        index += direction;
        if (index === string.length) {
            setTimeout(() => {
                direction = -1;
            }, 1000);
        }
        if (index === 0) {
            direction = 1;
        }
    };

    setInterval(type, 30);
</script>

<div class="contact">
    <div class="Imagecontact">
        <img src="<?php echo get_template_directory_uri() . '/images/home/contact/contact.svg'; ?>" class="imgContact"/>
    </div>

    <div class="contentContact">
        <div class="text-contact">
            <p class="top-text">Chúng tôi luôn ở đây để giúp bạn</p>
            <p class="mid-text">Liên hệ với chúng tôi</p>
            <p class="title-text">Tekup cam kết mang lại dịch vụ tốt nhất nhằm giúp doanh nghiệp của bạn phát triển thần tốc</p>
        </div>

        <form class="ContactForm">
            <div class="form1">
                <div class="input-group1">
                    <img src="<?php echo get_template_directory_uri() . '/images/home/contact/user.svg'; ?>" class="icon1"/>
                    <input class="input--style-1" type="text" placeholder="Tên cá nhân" name="user">
                </div>
                <div class="input-group2">
                <img src="<?php echo get_template_directory_uri() . '/images/home/contact/phone.svg'; ?>" class="icon1"/>
                    <input class="input--style-1" type="phone" placeholder="Số điện thoại" name="phone">
                </div>
            </div>
            <div class="form2">
                <div class="contactSelect">
                    <img src="<?php echo get_template_directory_uri() . '/images/home/contact/Areas_of_concern.svg'; ?>" class="iconAreas"/>
                    <select id="selectbox">
                        <option>Lĩnh vực quan tâm</option>
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                    </select>
                </div>
            </div>
            <div class="form3">
                <img src="<?php echo get_template_directory_uri() . '/images/home/contact/note.svg'; ?>" class="iconNote"/>
                <input class="input--style-1" type="text" placeholder="Lời nhắn" name="note">
            </div>
            <button class="btn btn--radius" type="submit"><p class="textButton">Gửi lời nhắn</p></button>
        </form>

    </div> 
</div>
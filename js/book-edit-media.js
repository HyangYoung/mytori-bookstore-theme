(function () {

    function renderCover(attachment){
        var imgEL = '<img src= "' + attachment.sizes.medium.url + '"/>';
        document.querySelector('.js-book-cover-thumbnail').innerHTML = imgEL;
    }

    var media = wp.media({
        title: '표지를 선택해주세요',
        library:{
            type: 'image'
        },
        button: {
            text: '넣기'
        }
    });

    //클릭시 라이브러리 열기
    document.querySelector('.js-open-book-cover-media').addEventListener('click', function(){
        media.open();
    });

    media.on('select', function (){
        //이미지 선택시 실행할 코드
        var attachment = media.state()
            .get('selection')
            .first()
            .toJSON();

        //이미지 표시
        renderCover(attachment);

        document.querySelector('[name="meta[cover_id]"]').value = attachment.id;
    });

    if(document.querySelector('[name="meta[cover_id]"]').value) {
        wp.media.attachment(document.querySelector('[name="meta[cover_id]"]').value)
            .fetch()
            .then(renderCover);
    }

}());
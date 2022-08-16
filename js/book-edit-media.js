(function () {

    function renderCoverAndShowRemoveButton(attachment){
        var imgEL = '<img src= "' + attachment.sizes.medium.url + '"/>';
        document.querySelector('.js-book-cover-thumbnail').innerHTML = imgEL;
        document.querySelector('.js-remove-book-cover-media').style.display = 'inline-block';
    }

    // 미디어 객체 불러오기
    function initMediaObject(){
        wp.media({
            title: '표지를 선택해주세요',
            library:{
                type: 'image'
            },
            button: {
                text: '넣기'
            }
        });
    }
    var media = initMediaObject();



    //클릭시 라이브러리 열기

    function bindOpeningMediaLibrary(){
        document.querySelector('.js-open-book-cover-media').addEventListener('click', function(){
            media.open();
        });
    }

    var media = bindOpeningMediaLibrary();


    media.on('select', function (){
        //이미지 선택시 실행할 코드
        var attachment = media.state()
            .get('selection')
            .first()
            .toJSON();

        //이미지 표시
        renderCoverAndShowRemoveButton(attachment);

        document.querySelector('[name="meta[cover_id]"]').value = attachment.id;
    });

    if(document.querySelector('[name="meta[cover_id]"]').value) {
        wp.media.attachment(document.querySelector('[name="meta[cover_id]"]').value)
            .fetch()
            .then(renderCoverAndShowRemoveButton);
    }

    // 표지 제거
    document.querySelector('.js-remove-book-cover-media').addEventListener('click', function () {
        document.querySelector('[name="meta[cover_id]"]').value = '';
        document.querySelector('.js-book-cover-thumbnail').innerHTML = '';
        this.style.display = 'none';
    })

}());
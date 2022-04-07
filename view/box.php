<div class="box-chat">
              <div class="icon text-right" style="cursor: pointer">X</div>
              <div class="top-box px-2">
                  <li>Quý khách hãy để lại sdt nhân viên sẽ gọi lại ít phút nữa</li>
                  <li>Quý khách chờ trong ít phút</li>
              </div>
              <div class="user-box mt-2">
                  <div class="form-group">
                    <input type="text" name="" id="" class="form-control" placeholder="Bạn để lại sdt, công ty sẽ gọi tư vấn"/>
                    <div style="display: flex;" class="mt-2">
                        <input type="text" name="" id="" class="form-control" placeholder="Bạn cần giúp gì ??"/>
                        <button class="btn btn-dark ml-1">Gửi</button>
                    </div>
                  </div>
              </div>
          </div>
          <div style="z-index:4;position: fixed; right: 0; bottom: 0; background: var(--bg__clr); border-radius: 10px;">
              <div class="box-chat-mini px-2 my-2" style="color: aliceblue; cursor: pointer">Chat với HM</div>
          </div>
          <script>
              icon= document.querySelector('.icon')
              show = document.querySelector('.box-chat-mini')
              box =document.querySelector('.box-chat')
              icon.addEventListener('click',my)
              show.addEventListener('click',shw)
              function my(){
                  box.style.display="none"
              }
              function shw(){
                  box.style.display="block"
              }
              </script>
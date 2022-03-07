const $ = document.querySelector.bind(document);
function add_new(){
    const root = $('.right-new');
    const tin = document.createElement('div');
    tin.classList.add('new');
    tin.innerHTML=
    `
    <div class="menu-list">
                        <div class="menu-title">
                            <p class="h5">Dịch vụ vận tải hàng không</p>
                        </div>
                        <div class="menu-item">
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        </div>
                    </div>
                    <div class="menu-list">
                        <div class="menu-title">
                            <p class="h5">Dịch vụ vận tải hàng không</p>
                        </div>
                        <div class="menu-item">
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        </div>
                    </div>
                    <div class="menu-list">
                        <div class="menu-title">
                            <p class="h5">Dịch vụ vận tải hàng không</p>
                        </div>
                        <div class="menu-item">
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        </div>
                    </div>
                    <div class="menu-list">
                        <div class="menu-title">
                            <p class="h5">Dịch vụ vận tải hàng không</p>
                        </div>
                        <div class="menu-item">
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                            <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        </div>
                    </div>`
        root.appendChild(tin)
        
}
add_new()
const ani = $('.menu-list');
        ani.forEach(function(name,index){
            name.setAtribute("data-aos","fade-left");
        });
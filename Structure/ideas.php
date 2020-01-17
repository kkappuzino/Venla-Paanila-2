<--! darkmode -->
<div class="container">
        <h1>Light / Dark Mode</h1>

        <input class="container_toggle" type="checkbox" id="switch" name="mode">
        <label for="switch">Toggle</label>
    </div>

<!-- ignore -->
<div class="thanku">
    <p><a href="https://www.youtube.com/watch?v=PSDyXk3MGYQ&t=12s" target="_blank">YouTube: Speed Code Video</a> | <a href="#">Tutorial (soon) </a> </></p>
</div>

<--! sass
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,900&display=swap');

    html {
    width: 100%;
    height: 100vh;

    display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    background: var(--lightBg);

    --lightBtn: #FE016C;
    --lightBg: #fff;
    --lightColor: #232323;
    }

    html[data-theme='dark'] {
    background: var(--lightBg);
    --lightBtn: #FFBD07;
    --lightBg: #232323;
    --lightColor: #fff;
    }

    h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    color: var(--lightColor);
    }

    input[type=checkbox] {
    height: 0;
    width: 0;
    visibility: hidden;
    }

    label {
    cursor: pointer;
    text-indent: -9999px;
    width: 55px;
    height: 30px;
    background: var(--lightBtn);
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    position: relative;
    }

    label:after {
    content: '';
    background: #fff;
    width: 20px;
    height: 20px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    position: absolute;
    top: 5px;
    left: 4px;
    transition: cubic-bezier(0.68, -0.55, 0.27, 01.55) 320ms;
    }

    input:checked + label {
    background: #FFBD07;
    }

    input:checked + label:after {
    left: calc(100% - 5px);
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
    }

    html.transition,
    html.transition *,
    html.transition *:before,
    html.transition *:after {
    transition: cubic-bezier(0.68, -0.55, 0.27, 01.55) 420ms!important;
    transition-delay: 0!important;
    }


    /* ignore, but thank u */
    .thanku {
    width: 100%;
    position: absolute;
    left: 0px;
    bottom: 0px;
    background: var(--lightBg);
    border-top: 1px solid var(--lightBtn);

    p {
        width:100%;
        text-align:center;
        a{
        letter-spacing: 1px;
        font-size: 12px;
        color: var(--lightColor);
        text-align: center;
            font-family: 'Poppins';
            text-decoration: none;
            margin-left:25px;
            margin-right: 25px;
        }
    }
    }
-->
<--! JS
    var checkbox = document.querySelector('input[name=mode]');

    checkbox.addEventListener('change', function() {
        if(this.checked) {
            trans()
            document.documentElement.setAttribute('data-theme', 'dark')
        } else {
            trans()
            document.documentElement.setAttribute('data-theme', 'light')
        }
    })

    let trans = () => {
        document.documentElement.classList.add('transition');
        window.setTimeout(() => {
            document.documentElement.classList.remove('transition');
        }, 1000)
    }
-->
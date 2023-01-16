

//新版主題
let topicLL = document.querySelector(".topicLL");
let topicLLClose = document.querySelectorAll(".topicLL .close img")
let drlText = document.querySelectorAll(".drl .text")
//新版主題關閉
if (topicLL) {
    topicLLClose.forEach(function (element) {
        element.addEventListener("click", function (e) {
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                cover.style = "display:none"
                topicLL.style = "display:none"
                element2.style = "display:none"
            }, false)
        }, false)
    }, false)
}
//drl
if (drlText) {
    drlText.forEach(function (element) {
        element.addEventListener("click", function (e) {
            if (element.parentNode.children[1].style.display == "block") {
                element.parentNode.children[1].style = "display: none;"
            }
            else {
                element.parentNode.children[1].style = "display: block; animation: toggleDown .25s;animation - fill - mode: forwards;"
            }

        }, false)
    }, false)
}


//drl切換
let drlUL = document.querySelectorAll(".drl ul");
if (drlUL) {
    drlUL.forEach(function (element) {
        element.children[0].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL1").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[1].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL2").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[2].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL3").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[3].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL4").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[4].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL5").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)
    }, false)

}

//
let tp1 = document.querySelector('.tp1')
let tp2 = document.querySelector('.tp2')
let tp3 = document.querySelector('.tp3')
let tp4 = document.querySelector('.tp4')
let tp5 = document.querySelector('.tp5')

if (topicLL) {
    tp1.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL1").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp2.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL2").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp3.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL3").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp4.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL4").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp5.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL5").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)
}



//未開放
let disabledTopic = document.querySelectorAll(".topicS .disabled");
disabledTopic.forEach(function (element) {
    element.addEventListener("click", function (e) {
        e.preventDefault()
    }, false)
}, false)


//關閉 
let closeSImg = document.querySelectorAll(".topicS .close img");
closeSImg.forEach(function (element) {
    element.addEventListener("click", function (e) {
        let topicc = document.querySelectorAll(".topicc")
        topicc.forEach(function (element) { element.style = "display:none" }, false)
        cover.style = "display:none"
    }, false)
}, false)

//dropdown
let dropdownSBtn = document.querySelectorAll(".topicS .dropdownBtn")
dropdownSBtn.forEach(function (element) {
    element.addEventListener("click", function (e) {
        let UL = element.parentNode.children[1]
        if (UL.style.display == "block") {
            UL.style = "display:none"
        }
        else {
            UL.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        }

    }, false)
}, false)



//dropdown UL
let dropdownSUL = document.querySelectorAll(".dropdown ul")
dropdownSUL.forEach(function (element) {

    element.addEventListener("click", function (e) {
        element.children[0].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic1").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[1].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic2").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[2].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic3").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[3].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic4").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[4].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic5").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

}, false)

//主題打開
let topicS1Btn = document.querySelector('.tpGroup .tp1');
topicS1Btn.addEventListener("click", function (e) {
    let topic1 = document.querySelector(".topicS .topic1")
    topic1.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS2Btn = document.querySelector('.tpGroup .tp2');
topicS2Btn.addEventListener("click", function (e) {
    let topic2 = document.querySelector(".topicS .topic2")
    topic2.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS3Btn = document.querySelector('.tpGroup .tp3');
topicS3Btn.addEventListener("click", function (e) {
    let topic3 = document.querySelector(".topicS .topic3")
    topic3.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS4Btn = document.querySelector('.tpGroup .tp4');
topicS4Btn.addEventListener("click", function (e) {
    let topic4 = document.querySelector(".topicS .topic4")
    topic4.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS5Btn = document.querySelector('.tpGroup .tp5');
topicS5Btn.addEventListener("click", function (e) {
    let topic5 = document.querySelector(".topicS .topic5")
    topic5.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)


let drTotal = document.querySelectorAll(".dr ul")
drTotal.forEach(function (element) {
    console.log(element);
    element.children[0].addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })

        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL1").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"
        drTotal.forEach(function (element2) {

        })
    }, false)
    element.children[1].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL2").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[2].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL3").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[3].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL4").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[4].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL5").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
})


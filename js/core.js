var Hero,
    HeroStart;

HeroStart = {
    renderAll: function(){
        var a;
        for (a in this.HeroOptions) {
            new Hero(this.HeroOptions[a]);
        }
    }
};

Hero = function (obj) {
    var a;
    for (a in obj){
        if (obj.hasOwnProperty(a)){
            this[a] = obj[a];
        }
    }
    object=obj;
    Hero.prototype.newWindow(obj);
};

Hero.prototype={
    newWindow: function(obj){
        Window.prototype.newWindow(obj);
    }
};

<!-- Шаблонизатор -->
function tmpl(str){
    var fn = new Function("obj",
        "var p=[],print=function(){p.push.apply(p,arguments);};" +

            // Introduce the data as local variables using with(){}
            "with(obj){p.push('" + document.getElementById(str).innerHTML
            .replace(/[\r\t\n]/g, " ")
            .split("<%").join(    "\t")
            .replace(/((^|%>)[^\t]*)'/g, "$1\r")
            .replace(/\t=(.*?)%>/g, "',$1,'")
            .split("\t").join("');")
            .split("%>").join(" p.push('")
            .split("\r").join("\\'") + "');} return p.join('');");
    return fn
}


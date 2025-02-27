"use strict";
window.AvatarGap = null == window.AvatarGap ? 5 : window.AvatarGap,
window.AvatarSize = null == window.AvatarSize ? 5 : window.AvatarSize;
var S = {
    init: function() {
        S.Drawing.init(".canvas"),
        S.ShapeBuilder.init(),
        S.UI.init(),
        S.Drawing.loop(function() {
            S.Shape.render()
        })
    }
};
S.Drawing = function() {
    var t, i, n, a = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
    function(e) {
        window.setTimeout(e, 1e3 / 60)
    };
    return {
        init: function(e) {
            t = document.querySelector(e),
            i = t.getContext("2d"),
            this.adjustCanvas(),
            window.addEventListener("resize",
            function() {
                S.Drawing.adjustCanvas()
            })
        },
        loop: function(e) {
            n = n || e,
            this.clearFrame(),
            n(),
            a.call(window, this.loop.bind(this))
        },
        adjustCanvas: function() {
            t.width = window.innerWidth,
            t.height = window.innerHeight
        },
        clearFrame: function() {
            i.clearRect(0, 0, t.width, t.height)
        },
        getArea: function() {
            return {
                w: t.width,
                h: t.height
            }
        },
        drawCircle: function(e, t, n) {
            var a = new Image;
            a.src = n,
            i.drawImage(a, e.x, e.y, 3 * e.z, 3 * e.z)
        }
    }
} (),
S.Point = function(e) {
    this.x = e.x,
    this.y = e.y,
    this.z = e.z,
    this.a = e.a,
    this.h = e.h
},
S.Color = function(e, t, n, a) {
    this.r = e,
    this.g = t,
    this.b = n,
    this.a = a
},
S.Color.prototype = {
    render: function() {
        return "rgba(" + this.r + "," + this.g + "," + this.b + "," + this.a + ")"
    }
},
S.UI = function() {
    var o, s, e, h, t = document.querySelector(".ui-input"),
    c = (document.querySelector(".ui"), document.querySelector(".canvas"), 0),
    l = 30,
    u = [],
    d = 1e4,
    w = "#",
    m = 0;
    function p(e) {
        var t = e.getHours(),
        n = e.getMinutes();
        return t + ":" + (n = n < 10 ? "0" + n: n)
    }
    function f(e, t, n, a) {
        clearTimeout(o),
        (!n || c <= n) && (n && c == n && -1 != signwall_show_str.indexOf("#countdown") ? c = 1 : n && c == n && -1 == signwall_show_str.indexOf("#countdown") && (c = 0), e(c), o = setTimeout(function() {
            c += 1,
            f(e, d, u.length, a)
        },
        d))
    }
    function v(n, a) {
        var i, r;
        f(function(e) {
            switch (a = 1 == u.length ? 1 : e + 1, r = u[a - 1], i = function(e) {
                return (e = e && e.split(" ")[0]) && e[0] === w && e.substring(1)
            } (r), n = function(e) {
                return e && e.split(" ")[1]
            } (r), $("#container").hide(), $(".canvas").show(), S.earth.dispose(), i) {
            case "countdown":
                m = 1,
                function(e, t, n) {
                    clearInterval(s),
                    e(n),
                    0 < n && (s = setInterval(function() {
                        clearTimeout(o),
                        e(n -= 1),
                        0 === n && clearInterval(s)
                    },
                    t))
                } (function(e) {
                    0 == e ? 0 == u.length ? S.Shape.switchShape(S.ShapeBuilder.letter("")) : (c += 1, v(u, a)) : S.Shape.switchShape(S.ShapeBuilder.letter(e), !0)
                },
                4e3, n = 0 < (n = parseInt(n, 10) || 10) ? n: 10),
                d = 1e4;
                break;
            case "rectangle":
                m = 1,
                n = (n = n && n.split("x")) && 2 === n.length ? n: [l, l / 2],
                S.Shape.switchShape(S.ShapeBuilder.rectangle(Math.min(l, parseInt(n[0], 10)), Math.min(l, parseInt(n[1], 10)))),
                d = 1e4;
                break;
            case "gene":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3)
                },
                3e3), d = 15e3, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    $("#container").show(),
                    style = "gene",
                    transform(targets.gene, 2e3, "gene", 40)
                },
                4e3)) : (d = 15e3, $("#container").show(), style = "gene", transform(targets.gene, 2e3, "gene", 40)),
                m = 0;
                break;
            case "earth":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3),
                    $("#container").hide()
                },
                3e3), d = 3e4, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    style = "earth",
                    S.earth.show(0)
                },
                4e3)) : (d = 3e4, style = "earth", S.earth.show(0)),
                m = 0;
                break;
            case "earth_1":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3),
                    $("#container").hide()
                },
                3e3), d = 3e4, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    style = "earth",
                    S.earth.show(1)
                },
                4e3)) : (d = 3e4, style = "earth", S.earth.show(1)),
                m = 0;
                break;
            case "earth_2":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3),
                    $("#container").hide()
                },
                3e3), d = 3e4, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    style = "earth",
                    S.earth.show(2)
                },
                4e3)) : (d = 3e4, style = "earth", S.earth.show(2)),
                m = 0;
                break;
            case "time":
                m = 1;
                var t = p(new Date);
                0 < u.length ? S.Shape.switchShape(S.ShapeBuilder.letter(t)) : f(function() { (t = p(new Date)) !== h && (h = t, S.Shape.switchShape(S.ShapeBuilder.letter(h)))
                }),
                d = 1e4;
                break;
            case "icon":
                m = 1,
                S.ShapeBuilder.imageFile(n,
                function(e) {
                    S.Shape.switchShape(e)
                }),
                d = 1e4;
                break;
            case "torus":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3)
                },
                3e3), d = 31e3, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    $("#container").show(),
                    style = "torus",
                    transform(targets.torus, 2e3, "torus", 32)
                },
                3e3)) : (d = 29e3, $("#container").show(), style = "torus", transform(targets.torus, 2e3, "torus", 32)),
                m = 0;
                break;
            case "sphere":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3)
                },
                3e3), d = 26e3, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    $("#container").show(),
                    style = "sphere",
                    transform(targets.sphere, 2e3, "sphere", 40)
                },
                4e3)) : (d = 26e3, $("#container").show(), style = "sphere", transform(targets.sphere, 2e3, "sphere", 40)),
                m = 0;
                break;
            case "grid":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3)
                },
                3e3), d = 2e4, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    $("#container").show(),
                    style = "grid",
                    transform(targets.grid, 2e3, "grid", 27)
                },
                4e3)) : (d = 2e4, $("#container").show(), style = "grid", transform(targets.grid, 2e3, "grid", 27)),
                m = 0;
                break;
            case "helix":
                1 == m ? (S.Shape.switchShape(S.ShapeBuilder.letter("")), setTimeout(function() {
                    $(".canvas").fadeOut(2e3)
                },
                3e3), d = 24e3, setTimeout(function() {
                    S.Shape.clearCanvas(),
                    $("#container").show(),
                    style = "helix",
                    transform(targets.helix, 2e3, "helix", 24)
                },
                4e3)) : (d = 2e4, $("#container").show(), style = "helix", transform(targets.helix, 2e3, "helix", 20)),
                m = 0;
                break;
            default:
                m = 1,
                S.Shape.switchShape(S.ShapeBuilder.letter(r[0] === w ? "What?": r)),
                d = 1e4
            }
        },
        0, (u = "object" == typeof n ? n: u.concat(n.split("|"))).length, a)
    }
    return {
        init: function() {
            window.addEventListener("resize",
            function() {
                clearTimeout(e),
                e = setTimeout(function() {
                    S.Shape.shuffleIdle()
                },
                500)
            }),
            t.focus()
        },
        simulate: function(e) {
            v(e)
        }
    }
} (),
S.Dot = function(e, t) {
    this.p = new S.Point({
        x: e,
        y: t,
        z: 5,
        a: 1,
        h: 0
    }),
    this.e = .07,
    this.s = !0,
    this.c = new S.Color(255, 255, 255, this.p.a),
    this.t = this.clone(),
    this.q = []
},
S.Dot.prototype = {
    clone: function() {
        return new S.Point({
            x: this.x,
            y: this.y,
            z: this.z,
            a: this.a,
            h: this.h
        })
    },
    _draw: function(e) {
        this.c.a = this.p.a,
        S.Drawing.drawCircle(this.p, this.c, e)
    },
    _moveTowards: function(e) {
        var t = this.distanceTo(e, !0),
        n = t[0],
        a = t[1],
        i = t[2],
        r = this.e * i;
        if ( - 1 === this.p.h) return this.p.x = e.x,
        this.p.y = e.y,
        !0;
        if (1 < i) this.p.x -= n / i * r,
        this.p.y -= a / i * r;
        else {
            if (! (0 < this.p.h)) return ! 0;
            this.p.h--
        }
        return ! 1
    },
    _update: function() {
        var e, t;
        this._moveTowards(this.t) && ((e = this.q.shift()) ? (this.t.x = e.x || this.p.x, this.t.y = e.y || this.p.y, this.t.z = e.z || this.p.z, this.t.a = e.a || this.p.a, this.p.h = e.h || 0) : this.s ? (this.p.x -= Math.sin(3.142), this.p.y -= Math.sin(3.142)) : this.move(new S.Point({
            x: this.p.x + 50 * Math.random() - 25,
            y: this.p.y + 50 * Math.random() - 25
        }))),
        t = this.p.a - this.t.a,
        this.p.a = Math.max(.5, this.p.a - .05 * t),
        t = this.p.z - this.t.z,
        this.p.z = Math.max(1, this.p.z - .05 * t)
    },
    distanceTo: function(e, t) {
        var n = this.p.x - e.x,
        a = this.p.y - e.y,
        i = Math.sqrt(n * n + a * a);
        return t ? [n, a, i] : i
    },
    move: function(e, t) { (!t || t && 1 < this.distanceTo(e)) && this.q.push(e)
    },
    render: function(e) {
        this._update(),
        this._draw(e)
    }
},
S.ShapeBuilder = function() {
    var c = window.AvatarGap,
    l = document.createElement("canvas"),
    u = l.getContext("2d");
    function e() {
        l.width = Math.floor(window.innerWidth / c) * c,
        l.height = Math.floor(window.innerHeight / c) * c,
        u.fillStyle = "red",
        u.textBaseline = "middle",
        u.textAlign = "center"
    }
    function i() {
        for (var e = u.getImageData(0, 0, l.width, l.height).data, t = [], n = 0, a = 0, i = l.width, r = l.height, o = 0, s = 0, h = 0; h < e.length; h += 4 * c) 0 < e[h + 3] && (t.push(new S.Point({
            x: n,
            y: a
        })), o = o < n ? n: o, s = s < a ? a: s, i = n < i ? n: i, r = a < r ? a: r),
        (n += c) >= l.width && (n = 0, a += c, h += 4 * c * l.width);
        return {
            dots: t,
            w: o + i,
            h: s + r
        }
    }
    function t(e) {
        u.font = "bold " + e + "px Avenir, Helvetica Neue, Helvetica, Arial, microsoft yahei, sans-serif"
    }
    return {
        init: function() {
            e(),
            window.addEventListener("resize", e)
        },
        imageFile: function(e, t) {
            var n = new Image,
            a = S.Drawing.getArea();
			n.crossOrigin = '';
            n.onload = function() {
                u.clearRect(0, 0, l.width, l.height),
                u.drawImage(this, 0, 0, .8 * a.w, .8 * a.h),
                t(i())
            },
            n.onerror = function() {
                t(S.ShapeBuilder.letter("What?"))
            },
            n.src = e
        },
        circle: function(e) {
            var t = Math.max(0, e) / 2;
            return u.clearRect(0, 0, l.width, l.height),
            u.beginPath(),
            u.arc(t * c, t * c, t * c, 0, 2 * Math.PI, !1),
            u.fill(),
            u.closePath(),
            i()
        },
        letter: function(e) {
            return t(650),
            t(Math.min(650, l.width / u.measureText(e).width * 1 * 650, l.height / 650 * (function(e) {
                return ! isNaN(parseFloat(e)) && isFinite(e)
            } (e) ? 1 : .45) * 650)),
            u.clearRect(0, 0, l.width, l.height),
            -1 != e.toString().indexOf("/") ? (u.fillText(e.substr(0, e.toString().indexOf("/")), l.width / 2, .15 * l.height), u.fillText(e.substr(e.toString().indexOf("/") + 1), l.width / 2, .6 * l.height)) : u.fillText(e, l.width / 2, l.height / 2),
            i()
        },
        rectangle: function(e, t) {
            for (var n = [], a = c * e, i = c * t, r = 0; r < i; r += c) for (var o = 0; o < a; o += c) n.push(new S.Point({
                x: o,
                y: r
            }));
            return {
                dots: n,
                w: a,
                h: i
            }
        }
    }
} (),
S.Shape = function() {
    var o = [],
    s = 0,
    h = 0,
    c = 0,
    l = 0;
    return {
        shuffleIdle: function() {
            for (var e = S.Drawing.getArea(), t = 0; t < o.length; t++) o[t].s || o[t].move({
                x: Math.random() * e.w,
                y: Math.random() * e.h
            })
        },
        clearCanvas: function() {
            o = []
        },
        switchShape: function(e, t) {
            var n, a = S.Drawing.getArea(),
            i = 0,
            r = 0;
            if (s = e.w, h = e.h,
            function() {
                var e = S.Drawing.getArea();
                c = e.w / 2 - s / 2,
                l = e.h / 2 - h / 2
            } (), e.dots.length > o.length) for (n = e.dots.length - o.length, i = 1; i <= n; i++) o.push(new S.Dot(a.w / 2, a.h / 2));
            for (i = 0; 0 < e.dots.length;) r = Math.floor(Math.random() * e.dots.length),
            o[i].e = t ? .65 : o[i].s ? .54 : .51,
            o[i].s ? o[i].move(new S.Point({
                z: 20 * Math.random() + 10,
                a: Math.random(),
                h: 8
            })) : o[i].move(new S.Point({
                z: 5 * Math.random() + 5,
                h: t ? 4 : 10
            })),
            o[i].s = !0,
            o[i].move(new S.Point({
                x: e.dots[r].x + c,
                y: e.dots[r].y + l,
                a: 1,
                z: window.AvatarSize,
                h: 0
            })),
            e.dots = e.dots.slice(0, r).concat(e.dots.slice(r + 1)),
            i++;
            for (r = i; r < o.length; r++) o[r].s && (o[r].move(new S.Point({
                z: 20 * Math.random() + 10,
                a: Math.random(),
                h: 2
            })), o[r].s = !1, o[r].e = .04, o[r].move(new S.Point({
                x: Math.random() * a.w,
                y: Math.random() * a.h,
                a: .3,
                z: 4,
                h: 0
            })))
        },
        render: function() {
            for (var e = 0; e < o.length; e++) if (0 < return_array.length) {
                var t = e % return_array.length;
                o[e].render(return_array[t].avatar)
            } else if (0 < placeholder_image_arr.length) {
                var n = e % placeholder_image_arr.length;
                o[e].render(placeholder_image_arr[n])
            } else o[e].render(default_placeholder_image)
        }
    }
} ();
var groupindex = 0,
existsearth = !1,
animateid = null;
S.earth = function() {
    function n() {
        for (var e = new THREE.Scene,
        t = 1500,
        n = new THREE.Vector3,
        a = 0,
        i = 0; i < table.length; i++) {
            var r = document.createElement("div");
            r.className = "element";
            var o = document.createElement("img");
            o.src = table[i].src,
            o.setAttribute("bowtie", ""),
            o.setAttribute("company", ""),
            o.setAttribute("name", table[i].nick_name),
            o.setAttribute("text", ""),
            o.setAttribute("imgId", ""),
            r.appendChild(o);
            var s = new THREE.CSS3DObject(r);
            i % 30 == 0 && (t += 400, a += Math.PI / 30);
            var h = i * Math.PI / 15 + a;
            s.position.x = t * Math.sin(h),
            s.position.z = t * Math.cos(h),
            n.x = 2 * s.position.x,
            n.y = s.position.y,
            n.z = 2 * s.position.z,
            s.lookAt(n),
            e.add(s)
        }
        return e.position.z = -8e3,
        e.position.y = 500,
        e
    }
    var t, a, i, r, o;
    function s() {
        a.rotation.x = Math.PI / 5,
        a.rotation.y += .005,
        t.rotation.x = Math.PI / 5,
        t.rotation.y += .005,
        animateid = requestAnimationFrame(s),
        r.render(a, o),
        i.render(t, o)
    }
    return {
        show: function(e) {
            0 == existsearth && ((o = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 1, 1e4)).position.z = 50, o.position.y = -2, t = function(e) {
                var t = {
                    earth: {
                        uniforms: {
                            texture: {
                                type: "t",
                                value: null
                            }
                        },
                        vertexShader: ["varying vec3 vNormal;", "varying vec2 vUv;", "void main() {", "gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );", "vNormal = normalize( normalMatrix * normal );", "vUv = uv;", "}"].join("\n"),
                        fragmentShader: ["uniform sampler2D texture;", "varying vec3 vNormal;", "varying vec2 vUv;", "void main() {", "vec3 diffuse = texture2D( texture, vUv ).xyz;", "float intensity = 1.05 - dot( vNormal, vec3( 0.0, 0.0, 1.0 ) );", "vec3 atmosphere = vec3( 1.0, 1.0, 1.0 ) * pow( intensity, 3.0 );", "gl_FragColor = vec4( diffuse + atmosphere, 1.0 );", "}"].join("\n")
                    },
                    atmosphere: {
                        uniforms: {},
                        vertexShader: ["varying vec3 vNormal;", "void main() {", "vNormal = normalize( normalMatrix * normal );", "gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );", "}"].join("\n"),
                        fragmentShader: ["varying vec3 vNormal;", "void main() {", "float intensity = pow( 0.8 - dot( vNormal, vec3( 0, 0, 1.0 ) ), 12.0 );", "gl_FragColor = vec4( 1.0, 1.0, 1.0, 1.0 ) * intensity;", "}"].join("\n")
                    }
                },
                n = new THREE.Scene,
                a = new THREE.SphereGeometry(5, 32, 32),
                i = t.earth,
                r = THREE.UniformsUtils.clone(i.uniforms),
                o = new THREE.TextureLoader;
                e = 2 < (e = parseInt(e)) || e < 0 ? 0 : e,
                r.texture.value = o.load(["/wall/themes/meepo/assets/images/earth/earth.jpg", "/wall/themes/meepo/assets/images/earth/earthlights.jpg", "/wall/themes/meepo/assets/images/earth/earthtransparent.png"][e]);
                var s = new THREE.ShaderMaterial({
                    uniforms: r,
                    vertexShader: i.vertexShader,
                    fragmentShader: i.fragmentShader
                }),
                h = new THREE.Mesh(a, s);
                n.add(h),
                i = t.atmosphere,
                r = THREE.UniformsUtils.clone(i.uniforms),
                s = new THREE.ShaderMaterial({
                    uniforms: r,
                    vertexShader: i.vertexShader,
                    fragmentShader: i.fragmentShader,
                    side: THREE.BackSide,
                    blending: THREE.AdditiveBlending,
                    transparent: !0
                });
                var c = new THREE.Mesh(a, s);
                return c.scale.set(1.1, 1.1, 1.1),
                n.add(c),
                n
            } (e), a = n(), (i = new THREE.WebGLRenderer({
                antialias: !0,
                alpha: !0
            })).setSize(window.innerWidth, window.innerHeight), $(i.domElement).appendTo("#earth"), (r = new THREE.CSS3DRenderer).setSize(window.innerWidth, window.innerHeight), r.domElement.style.position = "absolute", r.domElement.style.top = 0, $(r.domElement).appendTo("#earth"), existsearth = !0, s(), $("#earth").css({
                display: "block"
            }))
        },
        update: function() {
            for (var e = a.children.length; 0 <= e; e--) {
                var t = a.children[e];
                a.remove(t)
            }
            a = n()
        },
        dispose: function() {
            existsearth = !1,
            cancelAnimationFrame(animateid),
            $("#earth").html(""),
            $("#earth").css({
                display: "none"
            })
        }
    }
} ();
<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function _initialize()
    {
        $this->assign('title','木子企业');
    }
    //企业简介
    public function index()
    {
        return $this->fetch();
    }
    //木子简介
    public function introMZ(){
        return $this->fetch();
    }
    //企业文化
    public function culture(){
        return $this->fetch();
    }
    //品牌大事记
    public function history(){
        return $this->fetch();
    }

    //招聘信息
    public function recruit(){
        return $this->fetch();
    }
    //招募合伙人
    public function partner(){
        return $this->fetch();
    }
    //企业福利
    public function welfare(){
        return $this->fetch();
    }
    //董事长
    public function chairman(){
        return $this->fetch();
    }
    //部门
    public function marketdpt(){
        return $this->fetch();
    }
    public function productdpt(){
        return $this->fetch();
    }
    public function edudpt(){
        return $this->fetch();
    }
    public function financedpt(){
        return $this->fetch();
    }
    public function personneldpt(){
        return $this->fetch();
    }
    public function operationdpt(){
        return $this->fetch();
    }
    //木子造型
    public function mzhair(){
        return $this->fetch();
    }
    //木子护肤
    public function mzskin(){
        return $this->fetch();
    }
    //法妮雅
    public function introfny(){
        return $this->fetch();
    }
    //体验服务
    public function service(){
        return $this->fetch();
    }
    //门店
    public function store(){
        $name = input('param.name','mz');
        switch ($name) {
            case 'jy':
                $store = [
                    "name" => "木子造型金源店",
                    "address" => "北京市海淀区火器营与蓝靛厂路交叉口晴学园8号（地铁10号线火器营A口出）",
                    "tel" => "010-88859896",
                    "img" => "jy/store.png",
                    "back" => "jy/back.png",
                ];
                $team = [
                    [
                        'name' => "总监 艺然",
                        'img' => "jy/0.png",
                    ],
                    [
                        'name' => "总监 阿辉",
                        'img' => "jy/1.png",
                    ],
                    [
                        'name' => "发型师 大飞",
                        'img' => "jy/2.png",
                    ],
                    [
                        'name' => "发型师 瑞瑞",
                        'img' => "jy/3.png",
                    ],
                    [
                        'name' => "总监 大鹏",
                        'img' => "jy/4.png",
                    ],
                    [
                        'name' => "发型师 东尼",
                        'img' => "jy/5.png",
                    ],
                    [
                        'name' => "发型师 国威",
                        'img' => "jy/6.png",
                    ],
                    [
                        'name' => "发型师 阿毅",
                        'img' => "jy/7.png",
                    ],
                    [
                        'name' => "发型师 阿丰",
                        'img' => "jy/8.png",
                    ],
                    [
                        'name' => "发型师 琅琅",
                        'img' => "jy/9.png",
                    ]
                ];
                break;
            case 'wlj':
                $store = [
                    "name" => "木子造型五路居店",
                    "address" => "北京市海淀区五路居家乐福超市内（地铁6号线五路居C口）",
                    "tel" => "010-52963512",
                    "img" => "wlj/store.png",
                    "back" => "wlj/back.png",
                ];
                $team = [
                    [
                        'name' => "店长 华子",
                        'img' => "wlj/0.png",
                    ],
                    [
                        'name' => "总监 小强",
                        'img' => "wlj/1.png",
                    ],
                    [
                        'name' => "总监 小超",
                        'img' => "wlj/2.png",
                    ],
                    [
                        'name' => "总监 郑伟",
                        'img' => "wlj/3.png",
                    ],
                    [
                        'name' => "高级设计师 小奇",
                        'img' => "wlj/4.png",
                    ],
                    [
                        'name' => "头皮主任 蒙蒙",
                        'img' => "wlj/5.png",
                    ],
                    [
                        'name' => "液态主任 伟伟",
                        'img' => "wlj/6.png",
                    ],
                    [
                        'name' => "总监  张继超",
                        'img' => "wlj/7.png",
                    ]
                ];
                break;
            case 'mz':
                $store = [
                    "name" => "木子造型麦子店",
                    "address" => "北京市朝阳区枣营北里海悦名门底商38号楼（地铁14号线枣营北里A口）",
                    "tel" => "010-65017150",
                    "img" => "mz/store.png",
                    "back" => "wlj/back.png",
                ];
                $team = [
                    [
                        'name' => "店长 闫国峰  ",
                        'img' => "mz/0.png",
                    ],
                    [
                        'name' => "设计师  欧文",
                        'img' => "mz/1.png",
                    ],
                    [
                        'name' => "设计师  萱萱",
                        'img' => "mz/2.png",
                    ],
                    [
                        'name' => "头皮主任  毛毛",
                        'img' => "mz/3.png",
                    ],
                    [
                        'name' => "总监  天宏",
                        'img' => "mz/4.png",
                    ],
                    [
                        'name' => "总监  小野",
                        'img' => "mz/5.png",
                    ],
                    [
                        'name' => "总监  邹乐",
                        'img' => "mz/6.png",
                    ]
                ];
                break;
            case 'dzm':
                $store = [
                    "name" => "木子造型东直门店",
                    "address" => "北京市东城区东四十条保利剧院北侧（地铁2号线东四十条B口）",
                    "tel" => "010-64160238",
                    "img" => "dzm/store.png",
                    "back" => "dzm/back.png",
                ];
                $team = [
                    [
                        'name' => "护理部经理 刘新雨",
                        'img' => "dzm/0.png",
                    ],
                    [
                        'name' => "美发经理  王海明",
                        'img' => "dzm/1.png",
                    ],
                    [
                        'name' => "头皮主任  李倩",
                        'img' => "dzm/2.png",
                    ],
                    [
                        'name' => "总监  孟莹",
                        'img' => "dzm/3.png",
                    ],
                    [
                        'name' => "总监   大鹏",
                        'img' => "dzm/4.png",
                    ],
                    [
                        'name' => "总监  小文",
                        'img' => "dzm/5.png",
                    ]
                ];
                break;
            case 'xd':
                $store = [
                    "name" => "木子造型西单店",
                    "address" => "北京市西城区西单华威商场一层（地铁1号线/4号线西单B口）",
                    "tel" => "010-66063063",
                    "img" => "xd/store.png",
                    "back" => "dzm/back.png",
                ];
                $team = [
                    [
                        'name' => "护理部经理  天龙",
                        'img' => "xd/0.png",
                    ],
                    [
                        'name' => "总监 程武宁",
                        'img' => "xd/1.png",
                    ],
                    [
                        'name' => "总监  纪森",
                        'img' => "xd/2.png",
                    ],
                    [
                        'name' => "技术总监  夏天",
                        'img' => "xd/3.png",
                    ],
                    [
                        'name' => "设计师  旭升",
                        'img' => "xd/4.png",
                    ],
                    [
                        'name' => "头皮部经理  安迪",
                        'img' => "xd/5.png",
                    ]
                ];
                break;
            case 'dzs':
                $store = [
                    "name" => "木子造型大钟寺店",
                    "address" => "北京市海淀区家乐福内电梯旁（地铁13号线大钟寺B2口)",
                    "tel" => "010-52963256",
                    "img" => "dzs/store.png",
                    "back" => "dzs/back.png",
                ];
                $team = [
                    [
                        'name' => "行政店长   小志",
                        'img' => "dzs/0.png",
                    ],
                    [
                        'name' => "技术店长 张吉",
                        'img' => "dzs/1.png",
                    ],
                    [
                        'name' => "首席  陈学聪",
                        'img' => "dzs/2.png",
                    ],
                    [
                        'name' => "总监  陈飞",
                        'img' => "dzs/3.png",
                    ],
                    [
                        'name' => "发型师  郑光明",
                        'img' => "dzs/4.png",
                    ],
                    [
                        'name' => "头皮主任  傲雪",
                        'img' => "dzs/5.png",
                    ]
                ];
                break;
            case 'cym1':
                $store = [
                    "name" => "木子造型朝阳门一店",
                    "address" => "北京市东城区豆瓣胡同3号楼（地铁6号线朝阳门F口) ",
                    "tel" => "010-57167412",
                    "img" => "cym1/store.png",
                    "back" => "dzs/back.png",
                ];
                $team = [
                    [
                        'name' => "江伟 总监",
                        'img' => "cym1/0.png",
                    ],
                    [
                        'name' => "马辉  技术总监",
                        'img' => "cym1/1.png",
                    ],
                    [
                        'name' => "孙王唯仁 设计师",
                        'img' => "cym1/2.png",
                    ],
                    [
                        'name' => "孙晚晨 高级发型师",
                        'img' => "cym1/3.png",
                    ]
                ];
                break;
            case 'dwl':
                $store = [
                    "name" => "木子造型大望路店",
                    "address" => "北京市朝阳区大望路星光天地对面（地铁14号线/1号线大望路E口）",
                    "tel" => "010-57164193",
                    "img" => "dwl/store.png",
                    "back" => "dzs/back.png",
                ];
                $team = [
                    [
                        'name' => "张正锐 总监",
                        'img' => "dwl/0.png",
                    ],
                    [
                        'name' => "葛晓祺 总监",
                        'img' => "dwl/1.png",
                    ],
                    [
                        'name' => "孙晚晨 高级发型师",
                        'img' => "dwl/2.png",
                    ]
                ];
                break;
            case 'sfy':
                $store = [
                    "name" => "木子造型石佛营店",
                    "address" => "北京市石佛营东路炫特区北门-c区底商木子造型",
                    "tel" => "010-52379717",
                    "img" => "sfy/store.png",
                    "back" => "sfy/back.png",
                ];
                $team = [
                    [
                        'name' => "王洪峰 总监",
                        'img' => "sfy/0.png",
                    ],
                    [
                        'name' => "崔琦 经理",
                        'img' => "sfy/1.png",
                    ],
                    [
                        'name' => "陈树鹏 发型师",
                        'img' => "sfy/2.png",
                    ],
                    [
                        'name' => "老七 店长",
                        'img' => "sfy/3.png",
                    ],
                    [
                        'name' => "沈雪杰老师    发型师",
                        'img' => "sfy/4.png",
                    ]
                ];
                break;
            case 'sj':
                $store = [
                    "name" => "木子造型双井店",
                    "address" => "北京市朝阳区富力城A9链家地产旁（地铁10号线双井A口）",
                    "tel" => "010-58765066",
                    "img" => "sj/store.png",
                    "back" => "sfy/back.png",
                ];
                $team = [
                    [
                        'name' => "浩宇老师 发型师",
                        'img' => "sj/0.png",
                    ],
                    [
                        'name' => "安森老师 技术总监",
                        'img' => "sj/1.png",
                    ],
                    [
                        'name' => "迪蒙老师 行政经理",
                        'img' => "sj/2.png",
                    ],
                    [
                        'name' => "宇哲老师 艺术总监",
                        'img' => "sj/3.png",
                    ],
                    [
                        'name' => "阿轩老师 技术督导",
                        'img' => "sj/4.png",
                    ],
                    [
                        'name' => "阿龙老师 店长",
                        'img' => "sj/5.png",
                    ]
                ];
                break;
            default:
                $store = [
                    "name" => "木子造型金源店",
                    "address" => "北京市海淀区火器营与蓝靛厂路交叉口晴学园8号（地铁10号线火器营A口出）",
                    "tel" => "010-88859896",
                    "img" => "jy/store.png",
                    "back" => "jy/back.png",
                ];
                $team = [
                    [
                        'name' => "总监 艺然",
                        'img' => "jy/0.png",
                    ]
                ];
                break;
        }
        $this->assign('store',$store);
        $this->assign('team',$team);
        return $this->fetch();
    }
}

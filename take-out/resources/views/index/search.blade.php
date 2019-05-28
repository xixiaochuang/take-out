                <div class="indexmain">
                        <table width="100%" border="0" cellspacing="0" class="indexmain_1">
                            <tr>
                                @foreach($res as $v)
                                    <td class="main_1"><a href="take?menu_id={{$v['menu_id']}}">
                                            <div class="main_2"><img src="{{$v['menu_img']}}" width="100%" height="auto"/></div>
                                            <div class="indetext">{{$v['menu_name']}}</div></a>
                                    </td>
                                @endforeach
                            </tr>
                        </table>
                </div>


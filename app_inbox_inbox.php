<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 09/11/2017
 * Time: 09:18 PM
 */

session_start();

if (empty($_SESSION["Cuenta"])){
    header('location:index.html');
}


?>
<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th colspan="3">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-group-checkbox" />
                    <span></span>
                </label>
                <div class="btn-group input-actions">
                    <a class="btn btn-sm blue btn-outline dropdown-toggle sbold" href="javascript:;" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-pencil"></i> Mark as Read </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-ban"></i> Spam </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-trash-o"></i> Delete </a>
                        </li>
                    </ul>
                </div>
            </th>
            <th class="pagination-control" colspan="3">
                <span class="pagination-info"> 1-30 of 789 </span>
                <a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-right"></i>
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        <div id="feeed1"></div>
        <tr class="unread" data-messageid="2">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Daniel Wong </td>
            <td class="view-message"> Please help us on customization of new secure server </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="3">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="4">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="5">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="6">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="7">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="8">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="9">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="10">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="11">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="12">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="hidden-xs"> Facebook </td>
            <td class="view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="13">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="14">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="hidden-xs"> Facebook </td>
            <td class="view-message view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="15">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="16">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="17">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star inbox-started"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells"> </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
        <tr data-messageid="18">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> Facebook </td>
            <td class="view-message view-message"> Dolor sit amet, consectetuer adipiscing </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 14 </td>
        </tr>
        <tr data-messageid="19">
            <td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>
            <td class="view-message hidden-xs"> John Doe </td>
            <td class="view-message"> Lorem ipsum dolor sit amet </td>
            <td class="view-message inbox-small-cells">
                <i class="fa fa-paperclip"></i>
            </td>
            <td class="view-message text-right"> March 15 </td>
        </tr>
    </tbody>
</table>
<script>
    $( document ).ready(function() {
        $.ajax({
            url: 'addlist.php',
            data: {id:1},
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                for (var i = 0; i<data.length; i++){
                    console.log(data[i]);
                    $('#feeed1').append('<li>\n' +
                        '                                        <a href="javascript:;">' +
                        '                                            <div class="col1" style="width: 90%">' +
                        '                                                <div class="cont">' +
                        '                                                    <div class="cont-col1">' +
                        '                                                        <div class="label label-sm label-success">' +
                        '                                                            <i class="fa fa-bullhorn"></i>' +
                        '                                                        </div>' +
                        '                                                    </div>' +
                        '                                                    <div class="cont-col2">' +
                        '                                                        <div class="desc"> '+data[i]["nombre"]+' <span class="label label-sm label-info">'+data[i]["descripcion"]+
                        '                                                                            </span></div>' +
                        '                                                    </div>' +
                        '                                                </div>' +
                        '                                            </div>' +
                        '                                            <div class="col2" style="width: 90px">' +
                        '                                                <div class="date"> '+data[i]["fechai"]+' </div>' +
                        '                                            </div>' +
                        '                                        </a>' +
                        '                                    </li>');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
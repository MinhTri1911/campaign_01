<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
        .content-body {
            background: #2d3440;
            margin: 0;
            padding: 50px 120px;
        }

        table.content {
           margin: 50px auto;
           border-collapse: collapse;
           width: 100%;
           max-width: 600px;
        }

        table.content > tbody tr td {
            padding: 20px 20px 10px 20px;
            color: #555555;
            font-family: Arial, sans-serif;
            font-size: 17px;
            line-height: 30px;
            background: white;
        }

        table.content > tbody tr.tr-1 > td {
            background:#0ead87;
            text-align: center;
            padding: 20px 20px 20px 20px;
            color: #ffffff;
            font-family: VnBodoni;
            font-size: 36px;
            font-weight: bold;
        }

        table.content > tbody tr.tr-3 > td {
            padding: 0 20px 20px 20px;
            color: #555555;
            font-family: Arial, sans-serif;
            font-size: 15px;
            line-height: 24px;
            border-bottom: 1px solid #f6f6f6;
        }

        table.content > tbody tr.tr-5 > td {
            padding: 10px 20px 0px 20px;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        table.content > tbody tr.tr-6 > td {
           background: white;
           padding: 0 20px 20px 20px;
           font-family: Arial, sans-serif;
           line-height: 24px;
           border-bottom: 1px solid #f6f6f6;
        }

        table.content > tbody tr.tr-7 > td {
            background: #0EAD89;
            padding: 25px 20px;
            font-family: Arial, sans-serif;
        }

        .img-mail {
            box-shadow: 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12), 0 1px 3px 0 rgba(0,0,0,0.2);
            width: 100%;
            height: auto;
        }

        .img-invite {
            width:200px;
            height: 200px;
            display:block;
            margin: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="content-body">
        <div>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="content">
                <tbody>
                    <tr class="tr-1">
                        <td>
                        <h3>{{ $content }}</h3>
                            <br/>
                        </td>
                    </tr>
                    <tr class="tr-2">
                        <td>
                            <b>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td class="tr-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="tr-4">
                        </td>
                    </tr>
                    <tr class="tr-5">
                        <td>
                            <b>
                            </b>
                        </td>
                    </tr>
                    <tr class="tr-6">
                        <td>
                            <div class="hr-heading-body">
                                <p>
                                </p>
                                <a href='{{ $linkActive }}'>{{ $linkActive }}</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="tr-7"><td></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

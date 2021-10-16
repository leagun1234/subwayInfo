<?php header('Content-type: application/json');
    function process_data_df($buffer, $linenum) {
        $trn_list = [];

        //서울메트로 코드 구간
        $url = "https://smss.seoulmetro.co.kr/api/3010.do";

        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "lineNumCd=".$linenum);
    
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        //끝

        foreach($buffer as $e){
            array_push($trn_list, $e);
        }

        $rtrnlist = [];
        
        //중복제거 $e는 먼저 담겨있
        foreach($trn_list as $e) {
            $i = 0;
            //먼저 들어간 정보(trnList, $ee)와 지금 들어갈 정보($e)의 중복
            foreach($rtrnlist as $ee){
                if($ee["trainNo"] == $e["trainNo"]){
                    //($e가 최신 정보)
                    if(strtotime($ee["arvlDt"]) - strtotime($e["arvlDt"]) < 0){
                        $b = "{}";
                        $b = json_decode($b, true);
            
                        $b["trainNo"] = $e["trainNo"];
                        $b["directAt"] = $e["directAt"];
                        $b["lstcarAt"] = $e["lstcarAt"];
                        $b["arvlDt"] = $e["arvlDt"];
                        $b["statnNm"] = $e["statnNm"];
                        $b["statnTnm"] = $e["statnTnm"];
                        $b["trainSttus"] = $e["trainSttus"];
                        $b["trainLineNm"] = $e["trainLineNm"];
                        $b["statnY"] = $e["statnY"];
                        $b["statnX"] = $e["statnX"];
                        $b["updnLine"] = $e["updnLine"];
                        $b["trainP"] = $e["trainP"];
                        $b["statnId"] = $e["statnId"];
                        $b["statnTid"] = $e["statnTid"];
            
                        $trn_list[$i] = $b;
                        //$ee가 최신정보
                    } else {
                        continue 2;
                    }
                }
                $i++;
            }
            $b = "{}";
            $b = json_decode($b, true);

            $b["trainNo"] = $e["trainNo"];

            $b["directAt"] = $e["directAt"];
            $b["lstcarAt"] = $e["lstcarAt"];
            $b["arvlDt"] = $e["arvlDt"];
            $b["statnNm"] = $e["statnNm"];
            $b["statnTnm"] = $e["statnTnm"];
            $b["trainSttus"] = $e["trainSttus"];
            $b["trainLineNm"] = $e["trainLineNm"];
            $b["statnY"] = $e["statnY"];
            $b["statnX"] = $e["statnX"];
            $b["updnLine"] = $e["updnLine"];
            $b["trainP"] = $e["trainP"];
            $b["statnId"] = $e["statnId"];
            $b["statnTid"] = $e["statnTid"];

            array_push($rtrnlist, $b);
        }

        return $rtrnlist;
    }
    function process_data_2($buffer, $linenum) {
        $trn_list = [];

        //서울메트로 코드 구간
        $url = "https://smss.seoulmetro.co.kr/api/3010.do";

        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "lineNumCd=".$linenum);
    
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        //끝

        foreach($buffer as $e){
            array_push($trn_list, $e);
        }

        $rtrnlist = [];
        
        //중복제거 $e는 먼저 담겨있
        foreach($trn_list as $e) {
            $i = 0;
            //먼저 들어간 정보(trnList, $ee)와 지금 들어갈 정보($e)의 중복
            foreach($rtrnlist as $ee){
                if($ee["trainNo"] == $e["trainNo"]){
                    //($e가 최신 정보)
                    if(strtotime($ee["arvlDt"]) - strtotime($e["arvlDt"]) < 0){
                        $b = "{}";
                        $b = json_decode($b, true);
            
                        $b["trainNo"] = $e["trainNo"];
                        $b["directAt"] = $e["directAt"];
                        $b["lstcarAt"] = $e["lstcarAt"];
                        $b["arvlDt"] = $e["arvlDt"];
                        $b["statnNm"] = $e["statnNm"];
                        $b["statnTnm"] = $e["statnTnm"];
                        $b["trainSttus"] = $e["trainSttus"];
                        $b["trainLineNm"] = $e["trainLineNm"];
                        $b["statnY"] = $e["statnY"];
                        $b["statnX"] = $e["statnX"];
                        $b["updnLine"] = $e["updnLine"];
                        $b["trainP"] = $e["trainP"];
                        $b["statnId"] = $e["statnId"];
                        $b["statnTid"] = $e["statnTid"];
            
                        $trn_list[$i] = $b;
                        
                        //$ee가 최신정보
                    } else {
                        continue 2;
                    }
                }
                $i++;
            }
            $b = "{}";
            $b = json_decode($b, true);

            $b["trainNo"] = $e["trainNo"];
            $b["directAt"] = $e["directAt"];
            $b["lstcarAt"] = $e["lstcarAt"];
            $b["arvlDt"] = $e["arvlDt"];
            $b["statnNm"] = $e["statnNm"];
            $b["statnTnm"] = $e["statnTnm"];
            $b["trainSttus"] = $e["trainSttus"];
            $b["trainLineNm"] = $e["trainLineNm"];
            $b["statnY"] = $e["statnY"];
            $b["statnX"] = $e["statnX"];
            $b["updnLine"] = $e["updnLine"];
            $b["trainP"] = $e["trainP"];
            $b["statnId"] = $e["statnId"];
            $b["statnTid"] = $e["statnTid"];

            array_push($rtrnlist, $b);
        }
        
        $nl = [];
        foreach($rtrnlist as $e){
            $e["trainP"] = "null";
            $is_exist = false;
            //서교공 서버에 있는지 확인 1234
            foreach($res["ttcVOList"] as $ee){
                $tnumY = str_replace('K','',$ee["trainY"]);
                $tnumY = str_replace("S", "", $tnumY);
                $tnumY = substr($tnumY, -3);
                //열번의 뒤에 2자리 수만 가져오기 (앞 두자리는 틀리는경우가 많음) 그리고 K또는 S 붙이기(2호선 빼고)
                if($tnumY == substr($e["trainNo"], -3)){
                    $e["trainP"] = $ee["trainP"];
                    if($ee["sts"] == 1) $e["trainSttus"] = "진입";
                    else if($ee["sts"] == 2) $e["trainSttus"] = "정차";
                    else if($ee["sts"] == 3) $e["trainSttus"] = "출발";
                    else if($ee["sts"] == 4) $e["trainSttus"] = "사이 운행중";
                    $e["trainNo"] = "S2".substr($e["trainNo"], -3);
                    if($e["trainLineNm"] == "신도림지선" || $e["trainLineNm"] == "까치산"){
                        $e["trainNo"] = "S5".substr($e["trainNo"], -3);
                    } else if($e["trainLineNm"] == "성수지선" || $e["trainLineNm"] == "신설동"){
                        $e["trainNo"] = "S1".substr($e["trainNo"], -3);
                    }
                    $is_exist = true;
                }
            }
            if(!$is_exist) continue;
            array_push($nl, $e);
        }

        return $nl;
    }

    function process_data_sm($buffer, $linenum) {
        $trn_list = [];

        //서울메트로 코드 구간
        $url = "https://smss.seoulmetro.co.kr/api/3010.do";

        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "lineNumCd=".$linenum);
    
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        //끝

        foreach($buffer as $e){
            array_push($trn_list, $e);
        }

        $rtrnlist = [];
        
        //중복제거 $e는 먼저 담겨있
        foreach($trn_list as $e) {
            $i = 0;
            //먼저 들어간 정보(trnList, $ee)와 지금 들어갈 정보($e)의 중복
            foreach($rtrnlist as $ee){
                if($ee["trainNo"] == $e["trainNo"]){
                    //($e가 최신 정보)
                    if(strtotime($ee["arvlDt"]) - strtotime($e["arvlDt"]) < 0){
                        $b = "{}";
                        $b = json_decode($b, true);
            
                        $b["trainNo"] = $e["trainNo"];
            
                        $b["directAt"] = $e["directAt"];
                        $b["lstcarAt"] = $e["lstcarAt"];
                        $b["arvlDt"] = $e["arvlDt"];
                        $b["statnNm"] = $e["statnNm"];
                        $b["statnTnm"] = $e["statnTnm"];
                        $b["trainSttus"] = $e["trainSttus"];
                        $b["trainLineNm"] = $e["trainLineNm"];
                        $b["statnY"] = $e["statnY"];
                        $b["statnX"] = $e["statnX"];
                        $b["updnLine"] = $e["updnLine"];
                        $b["trainP"] = $e["trainP"];
                        $b["statnId"] = $e["statnId"];
                        $b["statnTid"] = $e["statnTid"];
            
                        $trn_list[$i] = $b;
                        
                        //$ee가 최신정보
                    } else {
                        continue 2;
                    }
                }
                $i++;
            }
            $b = "{}";
            $b = json_decode($b, true);

            $b["trainNo"] = $e["trainNo"];
            $b["directAt"] = $e["directAt"];
            $b["lstcarAt"] = $e["lstcarAt"];
            $b["arvlDt"] = $e["arvlDt"];
            $b["statnNm"] = $e["statnNm"];
            $b["statnTnm"] = $e["statnTnm"];
            $b["trainSttus"] = $e["trainSttus"];
            $b["trainLineNm"] = $e["trainLineNm"];
            $b["statnY"] = $e["statnY"];
            $b["statnX"] = $e["statnX"];
            $b["updnLine"] = $e["updnLine"];
            $b["trainP"] = $e["trainP"];
            $b["statnId"] = $e["statnId"];
            $b["statnTid"] = $e["statnTid"];

            array_push($rtrnlist, $b);
        }
        
        $nl = [];
        foreach($rtrnlist as $e){
            $e["trainP"] = "null";
            $is_exist = false;
            //서교공 서버에 있는지 확인 1234
            foreach($res["ttcVOList"] as $ee){
                $tnumY = str_replace('K','',$ee["trainY"]);
                $tnumY = str_replace("S", "", $tnumY);
                $tnumY = substr($tnumY, -3);
                //열번의 뒤에 2자리 수만 가져오기 (앞 두자리는 틀리는경우가 많음) 그리고 K또는 S 붙이기(2호선 빼고)
                if($tnumY == substr($e["trainNo"], -3)){
                    $e["trainP"] = $ee["trainP"];
                    $e["trainSttus"] = $ee["sts"];
                    if($ee["sts"] == "1") $e["trainSttus"] = "진입";
                    else if($ee["sts"] == "2") $e["trainSttus"] = "정차";
                    else if($ee["sts"] == "3") $e["trainSttus"] = "출발";
                    else if($ee["sts"] == "4") $e["trainSttus"] = "사이 운행중";
                    $e["trainNo"] = substr($ee["trainY"], 0, 1).$e["trainNo"];
                    $is_exist = true;
                }
            }
            if(!$is_exist) continue;
            array_push($nl, $e);
        }

        return $nl;
    }

    function parsing_data($url, $linenum) {
        $agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';
        $curlsession = curl_init ();
        curl_setopt ($curlsession, CURLOPT_URL, $url); // 파싱 주소 url
        //curl_setopt ($curlsession, CURLOPT_SSL_VERIFYPEER, FALSE); // 인증서 체크같은데 true 시 안되는 경우가 많다.
        //curl_setopt ($curlsession, CURLOPT_SSLVERSION,3); // SSL 버젼 (https 접속시에 필요)
        curl_setopt ($curlsession, CURLOPT_HEADER, 0);
        curl_setopt ($curlsession, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($curlsession, CURLOPT_POST, 0); // POST = 1, GET = 0
        curl_setopt ($curlsession, CURLOPT_USERAGENT, $agent);
        curl_setopt ($curlsession, CURLOPT_TIMEOUT, 120); // 해당 웹사이트가 오래걸릴수 있으므로 2분동안 타임아웃 대기
        $buffer = curl_exec ($curlsession);

        $cinfo = curl_getinfo($curlsession);
        curl_close($curlsession);
     
        if ($cinfo['http_code'] != 200){
            return $cinfo['http_code'];
        }
        //m.bus 코드
        //buffer은 버퍼 용도로만, 보정처리는 trn_list에서
        $buffer = json_decode(iconv("EUC-KR", "UTF-8", $buffer), true);
        $buffer = $buffer["resultList"];
        switch($linenum){
            case "2":
                return process_data_2($buffer, $linenum);
            case "1":
            case "3":
            case "4":
            case "5":
            case "6":
            case "7":
            case "8":
            case "G":
            case "K":
                return process_data_sm($buffer, $linenum);
            default:
            case "SU":
            case "KK":
                return process_data_df($buffer, $linenum);
        }
    }


    // Your code here!
    $url = "http://m.bus.go.kr/mBus/subway/getLcByRoute.bms?subwayId=";
    $param = "";
    $linenum = "1";
    switch($_GET["line"]){
        case "1":
            $param = "1001";
            $linenum = "1";
            break;
        case "2":
            $param = "1002";
            $linenum = "2";
            break;
        case "3":
            $param = "1003";
            $linenum = "3";
            break;
        case "4":
            $param = "1004";
            $linenum = "4";
            break;
        case "5":
            $param = "1005";
            $linenum = "5";
            break;
        case "6":
            $param = "1006";
            $linenum = "6";
            break;
        case "7":
            $param = "1007";
            $linenum = "7";
            break;
        case "8":
            $param = "1008";
            $linenum = "8";
            break;
        case "9":
            $param = "1009";
            $linenum = "9";
            break;
        case "G":
            $param = "1067";
            $linenum = "G";
            break;
        case "K":
            $param = "1063";
            $linenum = "K";
            break;
        case "S":
            $param = "1077";
            $linenum = "S";
            break;
        case "GH":
            $param = "1065";
            $linenum = "GH";
            break;
        case "U":
            $param = "1092";
            $linenum = "U";
            break;
        case "I":
            $param = "1069";
            $linenum = "I";
            break;
        case "SU":
            $param = "1069";
            $linenum = "SU";
            break;
        case "KK":
            $param = "1069";
            $linenum = "KK";
            break;
        default:
            echo '{"s":"500","errorMessage":"노선이 존재하지 않거나 지원하지 않습니다."}';
            exit();
    }
    $s = parsing_data($url.$param, $linenum);
    echo '{"s":"200", "errorMessage":"정상적인 서비스", "trainList":'.json_encode($s, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT).'}';
    unset($s);
?>

var SetTime = 300;		// 최초 설정 시간(기본 : 초)

function msg_time() {	// 1초씩 카운트
    
    m = Math.floor(SetTime / 60) + " : " + (SetTime % 60);	// 남은 시간 계산
    
    var msg = m;
    
    document.all.ViewTimer.innerHTML = msg;		// div 영역에 보여줌 
            
    SetTime--;					// 1초씩 감소
    
    if (SetTime < 0) {			// 시간이 종료 되었으면..
        
        clearInterval(tid);		// 타이머 해제
        // alert("시간이 초과되어 처음 화면으로 돌아갑니다.");
        document.location.href="../index.html";
        
    }
    
}

window.onload = function TimerStart(){ tid=setInterval('msg_time()',1000) };
		
n = int(raw_input())

for _ in range(n):
    a,b = map(int, raw_input().split())
    l = []
    count = 0
    
    for i in range(a,b+1):
        
        l = list(map(int, str(i)))
        k = [j*j for j in l]
        m = []

        while sum(k) not in m:
        	m.append(sum(k))
        	if sum(k)==1:
        	    count +=1
        	    continue	
        
            l = list(map(int, str(sum(k))))
        	k = [j*j for j in l]
        
        	
    print count
        
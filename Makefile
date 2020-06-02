CC = g++

all:
	$(CC) -std=c++11 -o run YoseCapstoneSimpleUI.cpp -l sqlite3

clean:
	rm -f run


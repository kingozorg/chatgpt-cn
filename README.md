# chatgpt
Translated info and text to english. 
Will add some stuff ...

------
**2023-03-16 updated version log:** 1.

1. support the display of tables and formulas
2. Optimized the code display logic

------
**2023-03-11 Update version log:**

1. Support multi-line input and automatic adjustment of text box height
3. AI can interrupt at any time on the way to answer
4. add the prompt of API_KEY blocked and API_KEY not provided error
5. adding some preset words
6. Optimized the adaptation to mobile browsers
7. fixed the bug that the display effect is abnormal when the content of AI reply contains some codes
8. add code copy button

**The code has been updated to call the latest gpt-3.5-turbo model.
It adopts Stream stream mode communication, generating and outputting at the same time, and the response speed exceeds the official website. The front-end uses JS's EventSource, and also typesets the Markdown formatted text and colors the code. The server records the conversation logs of all visitors. **

Many people want to enter their own API-KEY function in the demo site, the code has been added, just cancel the comments in index.php. For the sake of aesthetics, you can comment out the "continuous conversation" part above, otherwise the mobile access is not very friendly.

If you have local HTTP-PROXY, you can comment out the "curl_setopt($ch, CURLOPT_PROXY, " http://127.0.0.1:1081 ") in stream.php. ", so that you can access the openai interface through your local proxy.

If you don't have your own proxy, you can use the anti-generation address provided by enthusiastic users and change the line "curl_setopt($ch, CURLOPT_URL, ' https://api.openai.com/v1/chat/completions ');" inside The URL is changed to ' https://openai.1rmb.tk/v1/chat/completions ', not sure when that will fail, you can also go into the group and then find other group members to ask for one. But the anti-generation way of access is slower, it is best to buy their own overseas server, less than $20 per month there is.

If you really will not buy an overseas server, then you have your own domain name? If you have, you can also use cf worker to build your own anti-generation, specific reference can be made to this article: https://github.com/noobnooc/noobnooc/discussions/9

*test URL: http://mm1.ltd* 

! [WeChat screenshot_20230312112146](https://user-images.githubusercontent.com/5563148/224522389-f60e3047-c0e6-49cd-bee7-80feaf2c86a4.png)


------

The core code has only a few files, without using any framework, it is easy to modify debugging, you only need to modify the API_KEY in stream.php to use.

The code in front of index.php can also be implemented to distinguish between internal and external IPs, with direct access to the internal network and access to the external network through BASIC authentication. Comments can be removed and modified as needed.

Once deployed, you can put it on your company intranet and let your colleagues experience the powerful functions of chatGPT together. It can also be sent to friends to share, and the image of Internet technology bully is directly pulled full.


FAQ:

The most advanced model provided by the official API of OpenAI before is text-davinci-003, which is slightly weaker than the ChatGPT on the official website. Recently OpenAI finally released the gpt-3.5-turbo model, which is almost indistinguishable from the official ChatGPT in theory. Only due to the interface limitation, the maximum 4096 tokens for questions and answers, and 2 tokens for 1 Chinese character in practice.

There are also some gods on github who provide the code based on the official web version of chatgpt (https://github.com/acheong08/ChatGPT). The principle is to simulate the server as a client to interact with openai, all user requests are relayed to openai through the server. this mode requires the server IP is chatgpt support area, and stability is poor, ask more than a period of time may have been failed. The advantage is that there is no limit to the length of questions and answers, and there is no chargeback. But after the latest model is released, this solution is more chicken, good thing we didn't put too much effort into research before ......

There are some users who want to use docker to run this project, in fact, just find a nginx + php environment docker, the path points to the directory where the project is located on the line. Here is a docker image provided by an enthusiastic user: gindex/nginx-php:

```
docker pull gindex/nginx-php
docker run -itd -v /root/chatgpt(local directory):/usr/share/nginx/html --name nginx-php -p 8080(host port):80 --restart=always gindex/nginx-php
```

There is another enthusiastic user's docker version of chatgpt based on this project on github at https://github.com/hsmbs/chatgpt-php , which is also available.

If you like to use the standalone Windows desktop application, you can download the exe file inside Release and run it, which is actually a shell pointing to the browser on my demo site.

OpenAI official website of the model and interface calls introduced:

https://platform.openai.com/docs/models/moderation

https://platform.openai.com/docs/api-reference/chat/create

https://platform.openai.com/docs/guides/chat/introduction

https://platform.openai.com/docs/api-reference/models/list


Students who are interested in chatgpt are welcome to join the group to discuss. There are many gods in the group, so we can help each other if we have problems. If you need to do secondary development or other business cooperation on the basis of this project, you can add my WeChat to communicate.

The first group is full, please join the second group.

! [Exchange Group](https://user-images.githubusercontent.com/5563148/226341828-0f6d36ca-26c1-4bf6-bc11-6cda770fed7f.png)


Some enthusiastic users suggested me to put a reward code, if you really want to express your gratitude, a small amount is enough.

! [Reward Code](https://user-images.githubusercontent.com/5563148/222968018-9def451a-bbce-4a7e-bde6-edecc7ced40f.jpg)

Finally, I also made a function to implement ChatGPT chatbot in WeChat personal subscription number by calling OpenAI latest interface and gpt-3.5-turbo model, which has been open source, and you can take it if you need it.
https://github.com/dirk1983/chatgpt-wechat-personal

from pytube import YouTube
import pytube
import PySimpleGUI as sg      

sg.theme('DarkAmber')

layout = [[sg.Text('Enter any YouTube link: ')],      
          [sg.Input()],      
          [sg.Button('Convert'), sg.Exit()]]      

window = sg.Window('YouTube to MP3 Converter', layout)      

while True:
  event, values = window.read() 
  
  if event == sg.WIN_CLOSED or event == 'Exit':
    break      
  
  for value in values.values():
    url = value
    
  name = pytube.extract.video_id(url)
  title = YouTube(url).title
  YouTube(url).streams.filter(only_audio=True).first().download(output_path='ConvertedSongs', filename=title + ".mp3")
  print(f"Saved file as {title}.mp3 to folder ConvertedSongs.")
  
window.close()

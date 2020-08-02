from tkinter import *
from PIL import ImageTk, Image
import cv2
import datetime
import argparse
import os
from imutils import paths
import pandas as pd
from imutils.video import VideoStream
import imutils
import pickle
import numpy as np
import matplotlib.pyplot as plt
import cvlib as cv
from cvlib.object_detection import draw_bbox
global fram 
fram = []

def back():
    cap.release()
    cv2.destroyAllWindows()
    root.destroy()
    #os.system("python Dashboard.py")



# function for video streaming
def video_stream():
    # grab the frame from the threaded video stream
    frame = cap.read()
    frame = frame[1] if args.get("input", False) else frame
    #print(_)

    # convert the input frame from BGR to RGB then resize it to have
    # a width of 750px (to speedup processing)
    rgb = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
    rgb = imutils.resize(frame, width=750)
    #plt.imshow(frame)
    #plt.show()

    #r = frame.shape[1] / float(rgb.shape[1])

    # detect the (x, y)-coordinates of the bounding boxes
    # corresponding to each face in the input frame, then compute
    # the facial embeddings for each face
    bbox, label, conf = cv.detect_common_objects(rgb, enable_gpu=True)
    frame = draw_bbox(rgb, bbox, label, conf)
    #cv2.line(frame, (0, 250),(750,250),(0, 0, 0))
    
    #are supposed to display the output frame to
    # the screen
    if args["display"] > 0:
        fram = frame
        cv2image = cv2.cvtColor(frame, cv2.COLOR_BGR2RGBA)
        img = Image.fromarray(cv2image)
        imgtk = ImageTk.PhotoImage(image=img)
        lmain.imgtk = imgtk
        lmain.configure(image=imgtk)
        lmain.after(1, video_stream) 

            #cv2.imshow("Frame", frame)
            #key = cv2.waitKey(1) & 0xFF

            




if __name__ == "__main__": 

    ap = argparse.ArgumentParser()
    ap.add_argument("-y", "--display", type=int, default=1,
        help="whether or not to display output frame to screen")
    ap.add_argument("-i", "--input", type=str,
        help="path to optional input video file")
    args = vars(ap.parse_args())

    root = Tk()
    root.wm_title("Recognization System")
    
        # Create a frame
    app = Frame(root, bg="white")
    app.grid()
    
    fr =Frame(root, bg="white")
    fr.grid(row=0,column=1)
    lb = Label(root)
    lb.grid(row=13, column=1)
    
    back = Button(root, text="   Back   ", fg="Black", 
                            bg="Red", command=back) 
    back.grid(row=14, column=0)
    

    
    # Create a label in the frame
    lmain = Label(app)
    lmain.grid()


    # if a video path was not supplied, grab a reference to the webcam
    if not args.get("input", False):
        print("[INFO] starting video stream...")
        cap = VideoStream(src=0).start()
        time.sleep(2.0)
    # otherwise, grab a reference to the video file
    else:
        print("[INFO] opening video file...")
        cap = cv2.VideoCapture(args["input"])


    # Capture from camera
    video_stream()
    root.mainloop()
    
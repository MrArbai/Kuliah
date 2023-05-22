import math

def sine(angle):
    return math.sin(math.radians(angle))

def cosine(angle):
    return math.cos(math.radians(angle))

def tangent(angle):
    return math.tan(math.radians(angle))

def cotangent(angle):
    return 1 / math.tan(math.radians(angle))

def secant(angle):
    return 1 / math.cos(math.radians(angle))

def cosecant(angle):
    return 1 / math.sin(math.radians(angle))

<?php

/*

[Abstract Class] VS [Interface]
=====================================
من حيث
[Multiple inheritance]

interface=>A class may inherit several interfaces.

Abstract Class=>A class may inherit only one abstract class.

=====================================
من حيث
[Default implementation]

interface=>An interface cannot provide any code, just the signature.

Abstract Class=>An abstract class can provide complete, default code and/or just the details that have to be overridden.

=====================================
من حيث
[Access Modfiers]

interface=>An interface cannot have access modifiers for the subs, functions, properties etc everything is assumed as public

Abstract Class=>An abstract class can contain access modifiers for the subs, functions, properties

=====================================
من حيث
[speed]

Interface=>Requires more time to find the actual method in the corresponding classes.

Abstract Class=>Fast

=====================================
من حيث
[Adding functionality]

Interface=>If we add a new method to an Interface then we have to track down all the implementations of the interface and define implementation for the new method.

Abstract class=>If we add a new method to an abstract class then we have the option of providing default implementation and therefore all the existing code might work properly.

=====================================
من حيث
[Fields and Constants]

Interface=>No fields can be defined in interfaces

Abstract Class=>An abstract class can have fields and constants defined

*/